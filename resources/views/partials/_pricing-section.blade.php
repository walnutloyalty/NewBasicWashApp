<div x-data="{ monthly: true, separate: false }" class="bg-gray-50">
    <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">Pricing Plans</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">Goedkoop autowassen voor iedereen
            </p>
            <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
                <button type="button" @click="monthly = true, separate = false"
                        class="relative w-1/2 whitespace-nowrap rounded-md border-pink-200 bg-pink-600 py-2 text-sm font-medium text-white shadow-sm focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8 hover:bg-cyan-600">
                    Monthly billing
                </button>
                <button type="button" @click="separate = true, monthly = false"
                        class="relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border-pink-200 bg-pink-600 py-2 text-sm font-medium text-white focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8 hover:bg-cyan-600">
                    Yearly billing
                </button>
            </div>
        </div>
        <div>
            <div x-show="monthly"
                 class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium Plus</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">21,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="#"
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
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, anders 24,50
                                    per maand</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">17,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="#"
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
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, anders 20,50
                                    per maand</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Gold</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">13,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="#"
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
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, anders 16,50
                                    per maand</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Basic</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">9,50</span>
                            <span class="text-base font-medium text-gray-500">/mo*</span>
                        </p>
                        <a href="#"
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
                                <span class="text-xs text-gray-500">* bij aankoop van een jaarabonnement, anders 12,50
                                    per maand</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div x-show="separate"
                 class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium Plus</h2>
                        <p class="mt-4 text-sm text-gray-500">Losse wasbeurt op locatie</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">24,50</span>
                        </p>
                        <a href="#"
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
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Premium</h2>
                        <p class="mt-4 text-sm text-gray-500">Losse wasbeurt op locatie</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">10,50</span>
                        </p>
                        <a href="#"
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
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Gold</h2>
                        <p class="mt-4 text-sm text-gray-500">Losse wasbeurt op locatie</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">7,99</span>
                        </p>
                        <a href="#"
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
                        </ul>
                    </div>
                </div>

                <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-6">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Basic</h2>
                        <p class="mt-4 text-sm text-gray-500">Losse wasbeurt op locatie</p>
                        <p class="mt-8">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">4,99</span>
                        </p>
                        <a href="#"
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
