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
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-minervum-breda.webp') }}
        @endslot
    @endcomponent
</x-app-layout>
