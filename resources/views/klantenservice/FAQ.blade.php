<x-app-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Frequently asked questions</h2>
                    <p class="mt-4 text-lg text-gray-500">Can’t find the answer you’re looking for? Reach out to our <a
                            href="#" class="font-medium text-pink-600 hover:underline">customer support</a>
                        team.</p>
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
                                        class="text-pink-600 hover:underline" href="#">hier</a> gemakkelijk jouw
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
                                        voor meer informatie of doe de <a class="text-pink-600 hover:underline"
                                                                          href="#">kentekencheck</a>)
                                    </li>
                                    <li>Geen loszittende of niet originele onderdelen heeft (zoals o.a. een imperiaal,
                                        fietsendrager, antenne, bumper, spoiler, siertrips, stootlijsten en
                                        schijnwerpers)
                                    </li>
                                </ul>
                                <p class="text-base text-gray-500">Twijfel je? Vraag het onze medewerkers op locatie of
                                    neem <a class="text-pink-600 hover:underline" href="#">hier</a> contact op met de
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
                                    neem <a class="text-pink-600 hover:underline" href="#">hier</a> contact op met de
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
                                    <span class="font-medium text-gray-900">Wat moet ik doen bij schade,verlies of
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
                                <p class="text-base text-gray-500 py-2">Klik <a class="text-pink-600 hover:underline"
                                                                                href="#">hier</a> om contact met ons op
                                    te
                                    nemen. </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
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
                                <p class="text-base text-gray-500">Kijk <a class="text-pink-600 hover:underline"
                                                                           href="#">hier</a> voor de actuele
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
                                <p class="text-base text-gray-500">Kijk <a class="text-pink-600 hover:underline"
                                                                           href="#">hier</a> voor de afmetingen die van
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
                                        class="text-pink-600 hover:underline" href="#">kentekencheck</a></p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
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
                                <p class="text-base text-gray-500">Klik <a class="text-pink-600 hover:underline"
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
                                    alle benodigde informatie over. Klik <a class="text-pink-600 hover:underline"
                                                                            href="{{ route('particulier') }}">hier</a>
                                    om daar heen te gaan.
                                </p>
                                <p class="text-base text-gray-500 py-2">Benieuwd naar ons zakelijk aanbod? Neem dan <a
                                        class="text-pink-600 hover:underline" href="{{ route('zakelijk') }}">hier</a>
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
                                <p class="text-base text-gray-500 py-2">Klik <a class="text-pink-600 hover:underline">hier</a>
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
                                    Log <a class="text-pink-600 hover:underline" href="#">hier</a> in en ervaar het
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

                                    Klik <a class="text-pink-600 hover:underline" href="#">hier</a> om contact met ons
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
                                <p class="text-base text-gray-500 py-2">Log <a class="text-pink-600 hover:underline">hier</a>
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
                                        class="text-pink-600 hover:underline cursor-pointer">hier</a>
                                    contact met ons op te nemen.</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
