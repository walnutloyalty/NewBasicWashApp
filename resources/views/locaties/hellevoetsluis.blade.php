<x-app-layout>
    @component('components.locaties-components.locaties-grid')
        @slot('title')
            De voordeligste carwash van Hellevoetsluis
        @endslot
        @slot('subtitle')
            Bij Basic Wash Hellevoetsluis kan je zowel met je auto als je bus direct terecht. De carwash kan auto’s en
            bussen wassen tot 2,60m hoog. Onze wasprogramma’s zijn volledig geoptimaliseerd om jou zo snel mogelijk weer
            in een schone auto te laten rijden. Met een abonnement kan je zelfs onbeperkt autowassen. Kom wassen bij de
            voordeligste carwash van Hellevoetsluis en ervaar zelf hoeveel tijd en geld je bespaart.
        @endslot
        @slot('firstGridTitle')
            Basic Wash Hellevoetsluis
        @endslot
        @slot('firstGridAdres')
            Rijksstraatweg 65, Hellevoetsluis
        @endslot
        @slot('openingstijden')
            Ma - Zo ... 07:00-21:00
        @endslot
        @slot('secondGridImage')
            {{ asset('media/images/basic-wash-hellevoetsluis.jpeg') }}
        @endslot
    @endcomponent
</x-app-layout>
