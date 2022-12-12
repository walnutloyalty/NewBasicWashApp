<x-app-layout>
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
