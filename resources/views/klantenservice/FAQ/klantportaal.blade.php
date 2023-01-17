<div class="bg-white">
    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <p class="mt-4 text-xl text-black">Klantportaal</p>
            </div>
            <div class="mt-12 lg:col-span-2 lg:mt-0">
                <dl class="space-y-12">
                    <div x-data="{ question: false }" class="pt-6">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat kan ik met het Klantportaal van Basic
                                    Wash?</span>
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
                            <p class="text-base text-gray-500">Ons Klantportaal biedt jou een gebruiksvriendelijke
                                omgeving bij je Basic Wash abonnement. In deze omgeving beheer je zelf de gegevens
                                van je abonnement, krijg je inzicht in je besparingen door je bezoeken en nog veel
                                meer!
                                Log <a class="text-pink-600 hover:underline cursor-pointer"
                                       href="{{ route('klantenportaal') }}">hier</a> in en ervaar het
                                zelf!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe kan ik mijn gegevens wijzigen?</span>
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
                            <p class="text-base text-gray-500">Het wijzigen van je persoonsgegevens kun je zelf
                                regelen in het klantportaal. Voor het aanpassen van je kenteken of je
                                bankrekeningnummer kun je ons aan het werk zetten.

                                Klik <a class="text-pink-600 hover:underline cursor-pointer"
                                        href="{{ route('contact') }}">hier</a> om contact met ons
                                op te nemen. </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe kan ik bij mijn facturen?</span>
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
                            <p class="text-base text-gray-500">Het inzien of ophalen van jouw facturen is snel en
                                simpel te regelen. Log hiervoor in op jouw Klantportaal, zoek de juiste factuur en
                                download het PDF-bestand. </p>
                            <p class="text-base text-gray-500 py-2">Log <a href="{{ route('klantenportaal') }}"
                                                                           class="text-pink-600 hover:underline cursor-pointer">hier</a>
                                in om jouw factuur te regelen!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat gebeurt er als de automatische incasso
                                    mislukt is?</span>
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
                            <p class="text-base text-gray-500">Bij een mislukte betaling zullen wij jou op de hoogte
                                brengen via je mail. Deze mail bevat direct een betaalverzoek om aan de
                                achterstallige betaling te kunnen voldoen. Na verwerking kun jij je abonnement weer
                                opnieuw afsluiten. Hierna ben jij weer van harte welkom bij een van onze Basic Wash
                                locaties! </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe vaak kan ik mijn kenteken laten
                                    wijzigen?</span>
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
                            <p class="text-base text-gray-500">Het wijzigen van je kenteken is maximaal 3 keer
                                mogelijk, in een tijdsperiode van een jaar.
                            </p>
                            <p class="text-base text-gray-500 py-2">Regel het gemakkelijk door <a
                                    href="{{ route('contact') }}"
                                    class="text-pink-600 hover:underline cursor-pointer">hier</a>
                                contact met ons op te nemen.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
