<x-app-layout>
    @section('title', 'Klantenportaal')
    <div class="overflow-hidden bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-prose text-base lg:max-w-none">
                <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">{{__("Mijn data")}}</p>
            </div>
            <div class="relative z-10 mx-auto max-w-prose text-base lg:mx-0 lg:max-w-5xl lg:pr-72">
                <h2 class="mb-2 font-semibold">{{__("Welke data hebben we verzameld?")}}</h2>
                <p class="text-lg text-gray-500">{{__("Om u de optimale bruikbaarheid van onze digitale kaart te bieden, moeten we een paar dingen weten. Bij Basic Wash staat uw privacy en online veiligheid hoog in het vaandel. Daarom vragen we alleen de meest basisinformatie over u. Dit betekent naam, adres, telefoonnummer, geboortedatum, e-mailadres en indien mogelijk uw kenteken.")}}</p>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-8">
                <div class="relative z-10">
                    <div class="prose prose-indigo mx-auto text-gray-500 lg:max-w-none">
                        <h2 class="font-semibold text-base">{{__("Waarom hebben we persoonsdata nodig?")}}</h2>
                        <p>{{__("Uw persoonlijke gegevens worden bij ons veilig bewaard om de meest efficiënte herkenning en bereikbaarheid te bieden wanneer u uw digitale kaart gebruikt. U kunt ook kiezen, uitsluitend op basis van uw eerdere aankopen in onze winkel, om geautomatiseerde gerichte promoties en acties te ontvangen.")}}</p>
                    </div>
                    
                    <div class="mx-auto mt-10 flex max-w-prose text-base lg:max-w-none">
                        <div class="rounded-md shadow">
                            <a href="https://www.walnutapp.com/basicwash/my-data"
                               class="flex w-full items-center justify-center rounded-md border border-transparent bg-pink-600 px-5 py-3 text-base font-medium text-white hover:bg-cyan-600">
                              
                                {{__("Naar mijn data!")}}</a>
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto mt-12 max-w-prose text-base lg:mt-0 lg:max-w-none">
                    <div class="relative">
                        <div class="px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
                            <img
                                src="{{ asset('media/logos/basic-wash-secondary-logo.png') }}"
                                alt="BasicWash" class="w-full h-full rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
