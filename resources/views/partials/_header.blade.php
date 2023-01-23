<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ mobile: false }" class="relative bg-pink-600">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">Basic wash</span>
                    <img class="h-8 w-auto sm:h-14"
                         src="{{ asset('media/logos/basic-wash-logo.png') }}" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button" @click="mobile = true"
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <div x-data="{ menuItem1: false }" class="relative">
                    <button type="button" @click="menuItem1 = true" :class="menuItem1 ? 'text-cyan-500' : ''"
                            class="group text-white transition-all duration-300 ease-in-out inline-flex items-center"
                            aria-expanded="false">
                        <span
                            class="bg-left-bottom bg-gradient-to-r from-cyan-500 to-cyan-500 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold text-2xl group-hover:text-cyan-500">Webshop</span>
                        <svg class="text-white ml-2 h-5 w-5 group-hover:text-cyan-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="menuItem1" @click.away="menuItem1 = false" x-cloak
                         class="absolute z-50 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
                        <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 ">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="{{ route('particulier') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('particulier')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Particulier</p>
                                        <p class="mt-1 text-sm text-gray-500">Al onze abonnement voor jouw
                                            behoeftes.</p>
                                    </div>
                                </a>
                                <a href="{{ route('zakelijk') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('zakelijk')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Zakelijk wassen</p>
                                        <p class="mt-1 text-sm text-gray-500">Al onze abonnementen voor jouw zakelijke
                                            behoeftes.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{ menuItem2: false }" class="relative">
                    <button type="button" @click="menuItem2 = true" :class="menuItem2 ? 'text-cyan-500' : ''"
                            class="group text-white transition-all duration-300 ease-in-out inline-flex items-center"
                            aria-expanded="false">
                        <span
                            class="bg-left-bottom bg-gradient-to-r from-cyan-500 to-cyan-500 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold text-2xl group-hover:text-cyan-500">Locaties</span>
                        <svg class="text-white ml-2 h-5 w-5 group-hover:text-cyan-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="menuItem2" @click.away="menuItem2 = false" x-cloak
                         class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">
                        <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="{{ route('locaties') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('locaties')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Al onze Basic Wash locaties</p>
                                    </div>
                                </a>
                                <a href="{{ route('breda') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('breda')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Breda</p>
                                        <p class="mt-1 text-sm text-gray-500">Minervum 7001-C, 4817 ZJ Breda</p>
                                    </div>
                                </a>
                                <a href="{{ route('hellevoetsluis') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('hellevoetsluis')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Hellevoetsluis</p>
                                        <p class="mt-1 text-sm text-gray-500">Rijksstraatweg 65, 3222 KB
                                            Hellevoetsluis</p>
                                    </div>
                                </a>
                                <a href="{{ route('sint-willebrord') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('sint-willebrord')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Sint willebrord</p>
                                        <p class="mt-1 text-sm text-gray-500">Poppestraat 130, 4711 EZ Sint
                                            Willebrord</p>
                                    </div>
                                </a>
                                <a href="{{ route('terheijden') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('terheijden')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Terheijden</p>
                                        <p class="mt-1 text-sm text-gray-500">Zeggelaan 200, 4844 SK Terheijden</p>
                                    </div>
                                </a>
                                <a href="{{ route('ulvenhout') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('ulvenhout')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Ulvenhout</p>
                                        <p class="mt-1 text-sm text-gray-500">Molenstraat 1A, Ulvenhout</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{ menuItem3: false }" class="relative">
                    <button type="button" @click="menuItem3 = true" :class="menuItem3 ? 'text-cyan-500' : ''"
                            class="group text-white transition-all duration-300 ease-in-out inline-flex items-center"
                            aria-expanded="false">
                        <span
                            class="bg-left-bottom bg-gradient-to-r from-cyan-500 to-cyan-500 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold text-2xl group-hover:text-cyan-500">Klantenservice</span>
                        <svg class="text-white ml-2 h-5 w-5 group-hover:text-cyan-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="menuItem3" @click.away="menuItem3 = false" x-cloak
                         class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">
                        <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="{{ route('klantenportaal') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('klantenportaal')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Klantenportaal</p>
                                        <p class="mt-1 text-sm text-gray-500">Registreer hier met je personal data.</p>
                                    </div>
                                </a>
                                <a href="{{ route('kentekencheck') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('kentekencheck')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Kentekencheck</p>
                                        <p class="mt-1 text-sm text-gray-500">Check hier of je auto geschikt is voor
                                            onze wasstraten.</p>
                                    </div>
                                </a>
                                <a href="{{ route('FAQ') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('FAQ')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">F.A.Q.</p>
                                        <p class="mt-1 text-sm text-gray-500">Heb je een vraag bekijk dan hier of je
                                            antwoord er tussen staat.</p>
                                    </div>
                                </a>
                                <a href="{{ route('invulformulier') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('invulformulier')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Invulformulier</p>
                                        <p class="mt-1 text-sm text-gray-500">Is er iets waarmee we je kunnen helpen vul
                                            dan dit formulier in.</p>
                                    </div>
                                </a>
                                <a href="{{ route('over-ons') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('over-ons')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Over ons</p>
                                        <p class="mt-1 text-sm text-gray-500">Wij zijn Basic Wash.</p>
                                    </div>
                                </a>
                                <a href="{{ route('contact') }}"
                                   class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50 @if(Request::routeIs('contact')) bg-pink-100 @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">Contact</p>
                                        <p class="mt-1 text-sm text-gray-500">Wil je nog persoonlijk contact met ons
                                            nemen dan zijn we er altijd voor je.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div x-show="mobile" x-data="{ mobileSub1: false, mobileSub2: false, mobileSub3: false }"
         class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden z-50">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('media/logos/basic-wash-logo.png') }}"
                             alt="Basic Wash">
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="mobile = false"
                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub1 = true; mobileSub2 = false; mobileSub3 = false"
                           :class="mobileSub1 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Webshop</span>
                        </a>
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub2 = true; mobileSub1 = false; mobileSub3 = false"
                           :class="mobileSub2 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Locaties</span>
                        </a>
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub3 = true; mobileSub1 = false; mobileSub2 = false"
                           :class="mobileSub3 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Klantenservice</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div x-show="mobileSub1" class="space-y-6 py-6 px-5">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="{{ route('particulier') }}"
                       class="text-base font-medium @if(Request::routeIs('particulier')) text-pink-600 @endif">Particulier</a>
                    <a href="{{ route('zakelijk') }}"
                       class="text-base font-medium @if(Request::routeIs('zakelijk')) text-pink-600 @endif">Zakelijk
                        wassen</a>
                </div>
            </div>
            <div x-show="mobileSub2" class="space-y-6 py-6 px-5">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="{{ route('locaties') }}"
                       class="text-base font-medium @if(Request::routeIs('locaties')) text-pink-600 @endif">Al onze
                        Basic Wash locaties</a>
                    <a href="{{ route('breda') }}"
                       class="text-base font-medium @if(Request::routeIs('breda')) text-pink-600 @endif">Breda</a>
                    <a href="{{ route('hellevoetsluis') }}"
                       class="text-base font-medium @if(Request::routeIs('hellevoetsluis')) text-pink-600 @endif">Hellevoetsluis</a>
                    <a href="{{ route('sint-willebrord') }}"
                       class="text-base font-medium @if(Request::routeIs('sint-willebrord')) text-pink-600 @endif">Sint
                        willebrord</a>
                    <a href="{{ route('terheijden') }}"
                       class="text-base font-medium @if(Request::routeIs('terheijden')) text-pink-600 @endif">Terheijden</a>
                    <a href="{{ route('ulvenhout') }}"
                       class="text-base font-medium @if(Request::routeIs('ulvenhout')) text-pink-600 @endif">Ulvenhout</a>
                </div>
            </div>
            <div x-show="mobileSub3" class="space-y-6 py-6 px-5">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="{{ route('klantenportaal') }}"
                       class="text-base font-medium @if(Request::routeIs('klantenportaal')) text-pink-600 @endif">Klantenportaal</a>
                    <a href="{{ route('kentekencheck') }}"
                       class="text-base font-medium @if(Request::routeIs('kentekencheck')) text-pink-600 @endif">Kentekencheck</a>
                    <a href="{{ route('FAQ') }}"
                       class="text-base font-medium @if(Request::routeIs('FAQ')) text-pink-600 @endif">F.A.Q.</a>
                    <a href="{{ route('invulformulier') }}"
                       class="text-base font-medium @if(Request::routeIs('invulformulier')) text-pink-600 @endif">Invulformulier</a>
                    <a href="{{ route('over-ons') }}"
                       class="text-base font-medium @if(Request::routeIs('over-ons')) text-pink-600 @endif">Over ons</a>
                    <a href="{{ route('contact') }}"
                       class="text-base font-medium @if(Request::routeIs('contact')) text-pink-600 @endif">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
