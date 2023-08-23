<?php

namespace App\Http\Facades;

use Illuminate\Support\Facades\Http;

class LicenseplateFacade
{
    public static function formatLisenseplate($licensePlate)
    {
        return strtoupper(str_replace('-', '', str_replace(' ', '', $licensePlate)));
    }

    public static function isLicenseplateTaxi($licensePlate)
    {
        $licensePlate = self::formatLisenseplate($licensePlate);
        $licensePlateCheck = Http::get("https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken=$licensePlate");
        if (! $licensePlateCheck->ok()) {
            return false;
        }
        $licensePlateCheckData = $licensePlateCheck->json();
        if (empty($licensePlateCheckData[0])) {
            return false;
        }
        return $licensePlateCheckData[0]['taxi_indicator'] === 'Ja';
    }

    public static function isCompanyCar($licensePlate)
    {
        $licensePlate = self::formatLisenseplate($licensePlate);
        $licensePlateCheck = Http::get("https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken=$licensePlate");
        if (! $licensePlateCheck->ok()) {
            return false;
        }
        $licensePlateCheckData = $licensePlateCheck->json();
        if (empty($licensePlateCheckData[0])) {
            return false;
        }
        return $licensePlateCheckData[0]['voertuigsoort'] === 'Bedrijfsauto';
    }

    public static function isDealerLicensePlate($licensePlate)
    {
        // Return true if:
        // Er zijn handelaarskentekenbewijzen in de volgende 4 categorieën:

        // voor motorvoertuigen (lettercombinatie HA, HH, FH of HF)
        // voor aanhangwagens, opleggers, land- en bosbouwaanhangwagens en verwisselbare getrokken uitrustingstukken (lettercombinatie OA)
        // voor brom- en snorfietsen (lettercombinatie HC)
        // voor land- en bosbouwtrekkers, motorrijtuigen met beperkte snelheid (MMBS) en mobiele machines (lettercombinatie LH)

        // https://www.rdw.nl/particulier/voertuigen/auto/dealerkenteken
        $licensePlate = self::formatLisenseplate($licensePlate);

        return (bool) preg_match('/(HA|HH|FH|HF|OA|HC|LH)/', $licensePlate);
    }
}
