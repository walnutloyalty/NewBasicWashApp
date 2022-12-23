<x-app-layout>
    <div class="bg-gray-50">
        <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Checkout</h2>
            <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                <div>
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4">
                        <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                        <div class="mt-1">
                            <input id="telefoonnummer" name="telefoonnummer" type="tel"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4 max-w-[5rem]">
                        <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
                        <div class="mt-1">
                            <input id="postcode" name="postcode" type="text"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4 max-w-[5rem]">
                        <label for="huisnummer" class="block text-sm font-medium text-gray-700">Huisnummer</label>
                        <div class="mt-1">
                            <input id="huisnummer" name="huisnummer" type="text"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-4">
                        <h2 class="text-lg font-medium text-gray-900">Kenteken</h2>
                        <div class="mt-4">
                            <label for="kenteken" class="block text-sm font-medium text-gray-700">Uw lidmaatschap geldt
                                voor dit kenteken</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-blue-600 px-3 text-gray-500 sm:text-sm pt-4 text-white">NL</span>
                                    <input type="text" name="kenteken" id="kenteken" placeholder="AB12345"
                                           class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <div x-data="{ open: false, selected: 'Kies een locatie' }">
                            <label id="listbox-label" class="block text-sm font-medium text-gray-700">Waar wil je
                                wassen</label>
                            <div class="relative mt-1">
                                <button @click="open = true" @click.away="open = false" type="button"
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-1 focus:ring-cyan-600 sm:text-sm"
                                        aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                    <span x-text="selected" class="block truncate"></span>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <!-- Heroicon name: mini/chevron-up-down -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </button>
                                <ul x-show="open"
                                    class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                    tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                    aria-activedescendant="listbox-option-3">
                                    <li @click="selected = 'Breda'"
                                        class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                        id="listbox-option-0" role="option">
                                        <span :class="selected === 'Breda' ? 'font-extrabold' : 'font-normal'"
                                              class="block truncate">Breda</span>
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg x-show="selected === 'Breda'" class="h-5 w-5"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </li>
                                    <li @click="selected = 'Hellevoetsluis'"
                                        class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                        id="listbox-option-1" role="option">
                                        <span :class="selected === 'Hellevoetsluis' ? 'font-extrabold' : 'font-normal'"
                                              class="block truncate">Hellevoetsluis</span>
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg x-show="selected === 'Hellevoetsluis'" class="h-5 w-5"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </li>
                                    <li @click="selected = 'Sint willebrord'"
                                        class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                        id="listbox-option-2" role="option">
                                        <span :class="selected === 'Sint willebrord' ? 'font-extrabold' : 'font-normal'"
                                              class="block truncate">Sint willebrord</span>
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg x-show="selected === 'Sint willebrord'" class="h-5 w-5"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </li>
                                    <li @click="selected = 'Terheijden'"
                                        class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                        id="listbox-option-3" role="option">
                                        <span :class="selected === 'Terheijden' ? 'font-extrabold' : 'font-normal'"
                                              class="block truncate">Terheijden</span>
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg x-show="selected === 'Terheijden'" class="h-5 w-5"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ billingPeriod: 'maandelijks' }">
                        <div class="mt-10 border-t border-gray-200 pt-10 flex">
                            <div @click="billingPeriod = 'maandelijks'" class="flex items-center mr-10">
                                <input id="maandelijks" name="period" type="radio" checked
                                       class="h-4 w-4 border-gray-300"
                                       :class="billingPeriod === 'maandelijks' ? 'text-pink-600 focus:ring-cyan-600' : ''">
                                <label for="maandelijks" class="ml-3 block text-sm font-medium text-gray-700">Maandelijks</label>
                            </div>
                            <div @click="billingPeriod = 'jaarlijks'" class="flex items-center">
                                <input id="jaarlijks" name="period" type="radio"
                                       class="h-4 w-4 border-gray-300"
                                       :class="billingPeriod === 'jaarlijks' ? 'text-pink-600 focus:ring-cyan-600' : ''">
                                <label for="jaarlijks"
                                       class="ml-3 block text-sm font-medium text-gray-700">Jaarlijks</label>
                            </div>
                        </div>
                        <!--Subscription choice-->
                        <fieldset class="mt-10 border-t border-gray-200 pt-10">
                            <legend class="sr-only">Server size</legend>
                            <h2 class="block text-sm font-medium text-gray-700">Kies hier je lidmaatschap</h2>
                            <div x-data="{ choice: 'Premium' }" class="space-y-4">
                                <label @click="choice = 'Premium plus'"
                                       class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between"
                                       :class="choice === 'Premium plus' ? 'border-pink-600 ring-2 ring-pink-600' : ''">
                                    <input type="radio" name="premium-plus" class="sr-only"
                                           aria-labelledby="server-size-0-label"
                                           aria-describedby="server-size-0-description-0 server-size-0-description-1">
                                    <span class="flex items-center">
                                        <span class="flex flex-col text-sm">
                                            <span id="server-size-0-label" class="font-medium text-gray-900">Premium
                                                plus</span>
                                            <span id="server-size-0-description-0" class="text-gray-500">
                                            </span>
                                        </span>
                                    </span>
                                    <span id="server-size-0-description-1"
                                          class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                        <span class="font-medium text-gray-900"
                                              x-text="billingPeriod === 'jaarlijks' ? '€ 21,50' : '€ 24,50'"></span>
                                        <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                    </span>
                                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                          aria-hidden="true"></span>
                                </label>
                                <label @click="choice = 'Premium'"
                                       class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between"
                                       :class="choice === 'Premium' ? 'border-pink-600 ring-2 ring-pink-600' : ''">
                                    <input type="radio" name="premium" class="sr-only"
                                           aria-labelledby="server-size-1-label"
                                           aria-describedby="server-size-1-description-0 server-size-1-description-1">
                                    <span class="flex items-center">
                                        <span class="flex flex-col text-sm">
                                            <span id="server-size-1-label"
                                                  class="font-medium text-gray-900">Premium</span>
                                            <span id="server-size-1-description-0" class="text-gray-500">
                                            </span>
                                        </span>
                                    </span>
                                    <span id="server-size-1-description-1"
                                          class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                        <span class="font-medium text-gray-900"
                                              x-text="billingPeriod === 'jaarlijks' ? '€ 17,50' : '€ 20,50'"></span>
                                        <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                    </span>
                                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                          aria-hidden="true"></span>
                                </label>
                                <label @click="choice = 'Gold'"
                                       class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between"
                                       :class="choice === 'Gold' ? 'border-pink-600 ring-2 ring-pink-600' : ''">
                                    <input type="radio" name="gold" class="sr-only"
                                           aria-labelledby="server-size-2-label"
                                           aria-describedby="server-size-2-description-0 server-size-2-description-1">
                                    <span class="flex items-center">
                                        <span class="flex flex-col text-sm">
                                            <span id="server-size-2-label" class="font-medium text-gray-900">Gold</span>
                                            <span id="server-size-2-description-0" class="text-gray-500">
                                            </span>
                                        </span>
                                    </span>
                                    <span id="server-size-2-description-1"
                                          class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                        <span class="font-medium text-gray-900"
                                              x-text="billingPeriod === 'jaarlijks' ? '€ 13,50' : '€ 16,50'"></span>
                                        <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                    </span>
                                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                          aria-hidden="true"></span>
                                </label>
                                <label @click="choice = 'Basic'"
                                       class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between"
                                       :class="choice === 'Basic' ? 'border-pink-600 ring-2 ring-pink-600' : ''">
                                    <input type="radio" name="basic" class="sr-only"
                                           aria-labelledby="server-size-3-label"
                                           aria-describedby="server-size-3-description-0 server-size-3-description-1">
                                    <span class="flex items-center">
                                        <span class="flex flex-col text-sm">
                                            <span id="server-size-3-label"
                                                  class="font-medium text-gray-900">Basic</span>
                                        </span>
                                    </span>
                                    <span id="server-size-3-description-1"
                                          class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                        <span class="font-medium text-gray-900"
                                              x-text="billingPeriod === 'jaarlijks' ? '€ 9,50' : '€ 12,50'"></span>
                                        <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                    </span>
                                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                          aria-hidden="true"></span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <label for="voucher" class="block text-sm font-medium text-gray-700">Voucher</label>
                        <div class="mt-1">
                            <input type="text" name="voucher" id="voucher"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <button type="button"
                            class="inline-flex items-center rounded-md border border-transparent bg-pink-100 px-4 py-2 my-4 text-sm font-medium text-pink-700 hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                        Redeem voucher
                    </button>
                </div>


                <!-- Order summary -->
                <div class="mt-10 lg:mt-0">
                    <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="flex py-6 px-4 sm:px-6">
                                <div class="flex-shrink-0">
                                    <h2 class="text-xl font-bold text-gray-900">Je mandje</h2>
                                </div>
                            </li>
                            <!-- More products... -->
                        </ul>
                        <dl class="space-y-6 border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Subtotal</dt>
                                <dd class="text-sm font-medium text-gray-900">$64.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Shipping</dt>
                                <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Taxes</dt>
                                <dd class="text-sm font-medium text-gray-900">$5.52</dd>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                <dt class="text-base font-medium">Total</dt>
                                <dd class="text-base font-medium text-gray-900">$75.52</dd>
                            </div>
                        </dl>
                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                            <button type="submit"
                                    class="w-full rounded-md border border-transparent bg-pink-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                Confirm order
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
