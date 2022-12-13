<x-app-layout>
    @component('components.locaties-components.locaties-grid')
        @slot('title')
            De voordeligste carwash van Breda
        @endslot
        @slot('subtitle')
            Bij Basic Wash Express Breda kan je zowel met je auto als je bus direct terecht. Onze carwash in Breda is de
            voordeligste carwash in de omgeving en kan auto’s en bussen wassen tot wel 2,90m hoog. Jouw voertuig wordt
            extra snel gewassen doordat alle wasprogramma’s zijn uitgerust met vlekvrij naspoelen in plaats van drogen.
            Hierdoor is het zelfs mogelijk om je auto in 4 minuten volledig te wassen. Kom wassen bij de voordeligste
            carwash van Breda en ervaar zelf hoeveel tijd en geld je bespaart.
        @endslot
        @slot('firstGridTitle')
            Basic Wash Express Breda
        @endslot
        @slot('firstGridAdres')
            Minervum 7001-C, 4817 ZJ Breda
        @endslot
        @slot('openingstijden')
            24/7 open
        @endslot
        @slot('washingExtras')
            <?php
            $check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
  <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
</svg>
';
            ?>
            <?= $check ?> Washhoogte - 290cm
            <?= $check ?> Wasbreedte - 258cm
            <?= $check ?> Bandenpomp
            <?= $check ?> Stofzuigers
            <?= $check ?> Tankstation
            <?= $check ?> Geschikt voor bussen
            <?= $check ?> Vlekvrij naspoelen
            <?= $check ?> Extra snel wassen
        @endslot
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-minervum-breda.webp') }}
        @endslot
    @endcomponent
</x-app-layout>
