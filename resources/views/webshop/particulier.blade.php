<x-app-layout>
    <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center text-pink-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-12 h-12 inline mb-6">
                <path
                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"/>
            </svg>
        </div>
        <h1 class="text-center text-5xl font-extrabold text-pink-600">Webshop</h1>
        <h2 class="text-center text-lg mt-6">Sluit nu je abonnement af en komt direct onbeperkt autowassen!</h2>
        <div class="sm:align-center sm:flex sm:flex-col">
            <div x-show="private"
                 class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium Plus</h2>
                        <p class="mt-4 text-sm text-gray-500">Of probeer een <a href="#" class="underline">enkele
                                wasbeurt voor € 13,50</a></p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">€ 21,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="{{ route('particuliere-checkout') }}"
                           class="mt-8 block w-full rounded-md border border-pink-600 bg-pink-600 py-2 text-center text-sm font-semibold text-white hover:bg-cyan-600 hover:border-cyan-600">Buy
                            Premium Plus</a>
                    </div>
                    <div class="px-6 pt-6 pb-8">
                        <h3 class="text-sm font-medium text-gray-900">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">HD Polish</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Bodemwassen</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Hogedruk Voorwassen</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Actief Schuim</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Velgenreiniging</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Drogen/Vlekvrij Naspeoelen</span>
                            </li>
                            <li class="flex space-x-3">
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, <a
                                        href="{{ route('particuliere-checkout') }}"
                                        class="underline">anders
                                        € 24,50
                                        per maand</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border-2 border-pink-400 shadow-sm">
                    <div class="flex -translate-y-1/2 transform justify-center">
                        <span
                            class="inline-flex bg-pink-600 rounded px-4 py-1 text-base font-semibold text-white">Most
                            popular</span>
                    </div>
                    <div class="px-6 border-none">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium</h2>
                        <p class="mt-4 text-sm text-gray-500">Of probeer een <a href="#" class="underline">enkele
                                wasbeurt voor € 10,50</a></p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">€ 17,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="{{ route('particuliere-checkout') }}"
                           class="mt-8 block w-full rounded-md border border-pink-600 bg-pink-600 py-2 text-center text-sm font-semibold text-white hover:bg-cyan-600 hover:border-cyan-600">Buy
                            Premium</a>
                    </div>
                    <div class="px-6 pt-6 pb-8">
                        <h3 class="text-sm font-medium text-gray-900">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Wax Behandeling</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Bodemwassen</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Hogedruk Voorwassen</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Actief Schuim</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Velgenreiniging</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Drogen/Vlekvrij Naspoelen</span>
                            </li>
                            <li class="flex space-x-3">
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, <a
                                        href="{{ route('particuliere-checkout') }}"
                                        class="underline">anders
                                        € 20,50
                                        per maand</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Gold</h2>
                        <p class="mt-4 text-sm text-gray-500">Of probeer een <a href="#" class="underline">enkele
                                wasbeurt voor € 7,99</a></p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">€ 13,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="{{ route('particuliere-checkout') }}"
                           class="mt-8 block w-full rounded-md border border-pink-600 bg-pink-600 py-2 text-center text-sm font-semibold text-white hover:bg-cyan-600 hover:border-cyan-600">Buy
                            Gold</a>
                    </div>
                    <div class="px-6 pt-6 pb-8">
                        <h3 class="text-sm font-medium text-gray-900">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Hogedruk Voorwassen</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Actief Schuim</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Velgenreiniging</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Drogen/Vlekvrij Naspoelen</span>
                            </li>
                            <li class="flex space-x-3">
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, <a
                                        href="{{ route('particuliere-checkout') }}"
                                        class="underline">anders
                                        € 16,50
                                        per maand</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Basic</h2>
                        <p class="mt-4 text-sm text-gray-500">Of probeer een <a href="#" class="underline">enkele
                                wasbeurt voor € 4,99</a></p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">€ 9,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="{{ route('particuliere-checkout') }}"
                           class="mt-8 block w-full rounded-md border border-pink-600 bg-pink-600 py-2 text-center text-sm font-semibold text-white hover:bg-cyan-600 hover:border-cyan-600">Buy
                            Basic</a>
                    </div>
                    <div class="px-6 pt-6 pb-8">
                        <h3 class="text-sm font-medium text-gray-900">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Basis wasbeurt</span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-gray-500">Vlekvrij naspoelen</span>
                            </li>
                            <li class="flex space-x-3">
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, <a
                                        href="{{ route('particuliere-checkout') }}"
                                        class="underline">anders
                                        € 12,50
                                        per maand</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
