<x-app-layout>
    @component('components.locaties-components.locaties-grid')
        @slot('title')
            De voordeligste carwash van Terheijden, Made & Wagenberg
        @endslot
        @slot('subtitle')
            Bij Basic Wash Terheijden kan je zowel met je auto als je bus 24 uur per dag terecht. Onze wasstraat kan
            auto’s en bussen wassen tot 2,60m hoog. Onze wasprogramma’s zijn geoptimaliseerd om jou zo snel mogelijk
            weer in een schone auto te laten rijden. Kom wassen bij de voordeligste carwash van Terheijden, Made &
            Wagenberg en ervaar zelf hoeveel tijd en geld je bespaart.
        @endslot
        @slot('firstGridTitle')
            Basic Wash Terheijden
        @endslot
        @slot('firstGridAdres')
            Zeggelaan 200, Terheijden
        @endslot
        @slot('washingExtras')
            <?php
            $check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
  <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
</svg>
';
            ?>
            <?= $check ?> Washhoogte - 260cm
            <?= $check ?> Wasbreedte - 238cm
            <?= $check ?> Bandenpomp
            <?= $check ?> Tankstation
        @endslot
        @slot('openingstijden')
            24/7 open
        @endslot
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-terheijden.webp') }}
        @endslot
    @endcomponent
</x-app-layout>
