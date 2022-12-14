<x-app-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-pink-600">Wij zijn Basic Wash</h2>
                    <p class="text-xl text-gray-500">Wij willen iedereen de mogelijkheid geven om in een schone auto te
                        rijden. Daarom kan jij al voor minder dan € 10,- per maand onbeperkt wassen bij al onze
                        locaties.
                        Ben je benieuwd hoe het werkt? Scroll dan verder voor het stappenplan.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list"
                        class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg"
                                         src="{{ asset('media/images/basic-wash-over-ons.jpeg') }}"
                                         alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg"
                                         src="{{ asset('media/images/basic-wash-over-ons-2.jpeg') }}"
                                         alt="">
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
