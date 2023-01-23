<div class="bg-white">
    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <p class="mt-4 text-xl text-black">Locatiekenmerken</p>
            </div>
            <div class="mt-12 lg:col-span-2 lg:mt-0">
                <dl class="space-y-12">
                    <div x-data="{ question: false }" class="pt-6">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat zijn de openingstijden van mijn Basic
                                    Wash locatie?</span>
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
                            <p class="text-base text-gray-500">Kijk <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('locaties') }}">hier</a> voor de actuele
                                openingstijden van jouw Basic Wash locatie </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat is de maximale breedte en doorrijhoogte
                                    van mijn Basic Wash locatie?</span>
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
                            <p class="text-base text-gray-500">Kijk <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('locaties') }}">hier</a> voor de afmetingen die van
                                toepassing zijn op jouw Basic Wash locatie.</p>

                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat is de maximale bandenmaat bij mijn Basic
                                    Wash locatie?</span>
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
                            <p class="text-base text-gray-500">De Basic Wash locaties zijn onafhankelijk van de
                                bandenmaat. Hier is bij de Basic Wash locaties dus geen limiet voor opgesteld. </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Past mijn auto in de wasstraat bij mijn
                                    Basic Wash locatie?</span>
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
                            <p class="text-base text-gray-500">Dat kan je gemakkelijk controleren via onze <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('kentekencheck') }}">kentekencheck</a></p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
