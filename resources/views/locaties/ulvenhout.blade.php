<x-app-layout>
    @section('title', 'De voordeligste wasstraat van Ulvenhout')
    @component('components.locaties-components.locaties-grid')
        @slot('title')
            De voordeligste carwash van Ulvenhout
        @endslot
        @slot('subtitle')
            Bij Basic Wash Sint Ulvenhout kan je direct met je auto terecht. Onze carwash kan auto’s wassen tot 2,40m
            hoog. Onze wasprogramma’s zijn geoptimaliseerd om jou zo snel mogelijk weer in een schone auto te laten
            rijden. Met het Basic wasprogramma is het zelfs mogelijk om je auto in 5 minuten te wassen. Kom wassen bij
            de voordeligste carwash van Ulvenhout en ervaar zelf hoeveel tijd en geld je bespaart.
        @endslot
        @slot('firstGridTitle')
            Basic Wash Ulvenhout
        @endslot
        @slot('firstGridAdres')
            Molenstraat 1A, Ulvenhout
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
            <?= $check ?> Stofzuigers
            <?= $check ?> Bandenpomp
        @endslot
        @slot('openingstijden')
            Ma - Vr 07:00 - 21:00
            Za 08:00 - 21:00
            Zo 09:00 - 21:00
        @endslot
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-ulvenhout.webp') }}
        @endslot
    @endcomponent
</x-app-layout>
