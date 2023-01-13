<x-app-layout>
    @section('title', 'De voordeligste wasstraat van Sint Willebrord')
    @component('components.locaties-components.locaties-grid')
        @slot('title')
            De voordeligste carwash van Sint Willebrord, Etten-Leur & Rucphen
        @endslot
        @slot('subtitle')
            Bij Basic Wash Sint Willebrord kan je zowel met je auto als je bus direct terecht. Onze carwash kan auto’s
            en bussen wassen tot 2,40m hoog. Onze wasprogramma’s zijn geoptimaliseerd om jou zo snel mogelijk weer in
            een schone auto te laten rijden. Met het vlekvrij naspoelen in ons Basic wasprogramma is het zelfs mogelijk
            om je auto in 4 minuten te wassen. Kom wassen bij de voordeligste carwash van Sint Willebrord, Etten-Leur &
            Rucphen en ervaar zelf hoeveel tijd en geld je bespaart.
        @endslot
        @slot('firstGridTitle')
            Basic Wash Sint Willebrord
        @endslot
        @slot('firstGridAdres')
            Poppestraat 120, Sint Willebrord
        @endslot
        @slot('washingExtras')
            <?php
            $check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
  <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
</svg>
';
            ?>
            <?= $check ?> Washhoogte - 240cm
            <?= $check ?> Wasbreedte - 238cm
            <?= $check ?> HD boxen
            <?= $check ?> Bandenpomp
            <?= $check ?> Stofzuigers
            <?= $check ?> Tankshop
            <?= $check ?> Tankstation
            <?= $check ?> Wasserette
        @endslot
        @slot('openingstijden')
            24/7 open
        @endslot
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-sint-willebrord.webp') }}
        @endslot
    @endcomponent
</x-app-layout>
