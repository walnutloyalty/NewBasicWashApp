<div class="bg-white">
    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <p class="mt-4 text-xl text-black">Abonnement informatie</p>
            </div>
            <div class="mt-12 lg:col-span-2 lg:mt-0">
                <dl class="space-y-12">
                    <div x-data="{ question: false }" class="pt-6">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe registreer ik me als Basic Wash
                                    abonnee?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Om een abonnement bij Basic Wash af te sluiten, kun
                                je de volgende stappen voltooien:
                            </p>
                            <ul class="list-decimal py-2">
                                <li> Ga naar www.basicwash.nl/webshop</li>
                                <li> Kies het best passende abonnement voor jouw kenteken</li>
                                <li> Laat je gegevens achter in het aanmeldformulier en kom direct naar een van onze
                                    Basic Wash locaties!
                                </li>
                            </ul>
                            <p class="text-base text-gray-500">Klik <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('particulier') }}">hier</a> om
                                je abonnement af te
                                sluiten!
                            </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Waar vind ik informatie over de
                                    verschillende abonnementsvormen?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Basic Wash biedt verschillende abonnementen aan om
                                aan jouw behoeften te kunnen voldoen. Via onze website www.basicwash.nl vind je hier
                                alle benodigde informatie over. Klik <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('particulier') }}">hier</a>
                                om daar heen te gaan.
                            </p>
                            <p class="text-base text-gray-500 py-2">Benieuwd naar ons zakelijk aanbod? Neem dan <a
                                    class="text-pink-600 hover:underline cursor-pointer" href="{{ route('zakelijk') }}">hier</a>
                                snel een kijkje!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat zijn de algemene
                                    abonnementsvoorwaarden?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Alle voorwaarden die op jouw abonnement van
                                toepassing zijn, kun je vinden via de onderstaande link. Zo kom je nooit voor
                                verrassingen te staan!</p>
                            <p class="text-base text-gray-500 py-2">Klik <a
                                    href="{{ route('abonnements-voorwaarden') }}"
                                    class="text-pink-600 hover:underline cursor-pointer">hier</a>
                                om naar de abonnementsvoorwaarden te gaan</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe vaak mag ik met mijn auto komen wassen
                                    met een was abonnement?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Bij Basic Wash hanteren wij een ‘Fair Use Policy’.
                                Dit betekent dat je met een abonnement maximaal 3 keer zoveel mag komen wassen als
                                het gemiddeld aantal in die maand. Zo kunnen wij iedereen de mogelijkheid bieden om
                                in een schone auto te rijden!

                                Ter indicatie: vorige maand was het ‘Fair Use Policy’-limiet 10 wasbeurten per
                                maand. </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe gaat de betaling van mijn
                                    abonnement?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Een abonnement sluit je af met een IDEAL-betaling.
                                Daarmee geef je tegelijkertijd een machtiging af om het abonnementsgeld maandelijks
                                te incasseren. Na jouw eerste Ideal betaling hoef je dus niks meer te doen. </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat gebeurt er als een betaling wordt
                                    gestorneerd?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="rotate-0 h-6 w-6 transform" :class="{ 'rotate-180': question }"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="question" @click.away="question = false" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base text-gray-500">Het systeem blokkeert dan automatisch jouw abonnement
                                en je kan ook geen nieuw abonnement meer afsluiten.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
