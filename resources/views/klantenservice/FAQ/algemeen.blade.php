<div class="bg-white">
    <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Frequently asked questions</h2>
                <p class="mt-4 text-lg text-gray-500">Staat je vraag er niet tussen neem dan gerust <a
                        href="{{ route('contact') }}" class="font-medium text-pink-600 hover:underline cursor-pointer">contact </a>op
                    met ons. </p>
                <p class="mt-4 text-xl text-black">Algemeen</p>
            </div>
            <div class="mt-12 lg:col-span-2 lg:mt-0">
                <dl class="space-y-12">
                    <div x-data="{ question: false }" class="pt-6">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe vaak kan ik het beste mijn auto
                                    wassen?</span>
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
                            <p class="text-base text-gray-500">De brancheorganisatie BOVAG adviseert de consument om
                                maandelijks de auto te wassen. Onze experts raden je aan om elke twee weken een
                                Basic Wash locatie te bezoeken. Zo voorkom je diepgeworteld vuil op de lak en houdt
                                jij de waarde van je auto hoog! </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Kan mijn auto zonder risico door de
                                    wasstraat?</span>
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
                            <p class="text-base text-gray-500">Je vermijdt het grootste risico op lakschade door bij
                                ons te komen wassen. Het wegspoelen van bijvoorbeeld pekel, zand en vogelpoep houdt
                                jouw auto in topconditie. Daarnaast zorgen wij samen met jou voor een probleem- en
                                risicoloze wasbeurt. Hoe?
                            </p>
                            <ul class="list-disc py-4">
                                <li>Jij helpt mee door zorgvuldig de instructies en aanwijzingen te volgen, vooraf
                                    de antenne te verwijderen van het dak en de motor af te zetten tijdens het
                                    wassen.
                                </li>
                                <li>Wij regelen de rest, door onder andere het gebruik van hoogwaardige wasmiddelen,
                                    foam- en textielborstels om krassen te voorkomen en intensief onderhoud om de
                                    kwaliteit van de wasinstallatie hoog te houden.
                                </li>
                            </ul>
                            <p class="text-base text-gray-500">Kom dus met een gerust hart naar een van onze Basic
                                Wash locaties voor een risicoloze wasbeurt! Sluit <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('particulier') }}">hier</a> gemakkelijk jouw
                                abonnement af!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Is mijn type voertuig geschikt voor een
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
                            <p class="text-base text-gray-500">Jouw voertuig is geschikt voor onze locaties, als
                                het:
                            </p>
                            <ul class="list-disc py-4">
                                <li>Vier wielen en een dichte carrosserie heeft;
                                </li>
                                <li>De maximum-afmetingen van de locaties niet overschrijdt (zie onze locatiepagina
                                    voor meer informatie of doe de <a
                                        class="text-pink-600 hover:underline cursor-pointer"
                                        href="{{ route('kentekencheck') }}">kentekencheck</a>)
                                </li>
                                <li>Geen loszittende of niet originele onderdelen heeft (zoals o.a. een imperiaal,
                                    fietsendrager, antenne, bumper, spoiler, sierstrips, stootlijsten en
                                    schijnwerpers)
                                </li>
                            </ul>
                            <p class="text-base text-gray-500">Twijfel je? Vraag het onze medewerkers op locatie of
                                neem <a class="text-pink-600 hover:underline cursor-pointer"
                                        href="{{ route('contact') }}">hier</a> contact op met de
                                klantenservice!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Hoe ziet de werking van een wasprogramma bij
                                    Basic Wash eruit?</span>
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
                            <p class="text-base text-gray-500">Vanaf de aankomst bij de Basic Wash locatie zal de
                                wasbeurt als volgt verlopen:
                            </p>
                            <ul class="list-decimal py-4">
                                <li><span class="font-bold">Opstellen:</span> Na het inklappen van de spiegels en
                                    het weghalen van de antenne stel je de auto op voor de inrit;
                                </li>
                                <li><span class="font-bold">Doorrijden:</span> Je verkrijgt automatisch toegang tot
                                    de wasstraat op basis van je kenteken;
                                </li>
                                <li><span class="font-bold">Positioneren:</span> Stel de auto juist op en blijf
                                    rustig zitten tijdens het wassen
                                </li>
                                <li><span class="font-bold">Wassen:</span> Ervaar zelf hoeveel tijd en geld je
                                    bespaart.
                                </li>
                            </ul>
                            <p class="text-base text-gray-500">Twijfel je? Vraag het onze medewerkers op locatie of
                                neem <a class="text-pink-600 hover:underline cursor-pointer"
                                        href="{{ route('contact') }}">hier</a> contact op met de
                                klantenservice!</p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Welke betalingsmogelijkheden kent Basic
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
                            <p class="text-base text-gray-500">De betaling van jouw abonnement verloopt via een
                                maandelijkse of jaarlijkse automatische incasso. Bij de andere faciliteiten op de
                                Basic Wash locaties kun je gemakkelijk betalen via de contactloze
                                betaalterminals. </p>
                        </dd>
                    </div>
                    <div x-data="{ question: false }">
                        <dt class="text-lg">
                            <button type="button" @click="question = true"
                                    class="flex w-full items-start justify-between text-left text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Wat moet ik doen bij schade, verlies of
                                    diefstal?</span>
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
                            <p class="text-base text-gray-500">Wij helpen je graag om een juiste afhandeling te
                                volgen! Leg het voorval zo goed mogelijk vast op basis van de aanwezige feiten. Stel
                                ons op de hoogte en wij doen ons best om samen zo snel mogelijk tot een oplossing te
                                komen!
                            </p>
                            <p class="text-base text-gray-500 py-2">Klik <a
                                    class="text-pink-600 hover:underline cursor-pointer"
                                    href="{{ route('contact') }}">hier</a> om contact met ons op
                                te
                                nemen. </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
