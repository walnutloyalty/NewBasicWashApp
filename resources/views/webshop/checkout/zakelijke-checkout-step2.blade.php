<x-app-layout>
    @section('title', 'Checkout')
    <div class="bg-white">
        <header class="relative border-b border-gray-200 bg-white text-sm font-medium text-gray-700">
            <div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8">
                <div class="relative flex justify-end sm:justify-center">
                    <nav aria-label="Progress" class="hidden sm:block">
                        <ol role="list" class="flex space-x-4">
                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step1') }}" class="@if(Request::routeIs('zakelijke-checkout-step1')) text-pink-600 @endif">Contact informatie</a>

                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step2') }}" aria-current="page" class="@if(Request::routeIs('zakelijke-checkout-step2')) text-pink-600 @endif">Betaal informatie</a>

                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step3') }}" class="@if(Request::routeIs('zakelijke-checkout-step3')) text-pink-600 @endif">Bevestigen</a>
                            </li>
                        </ol>
                    </nav>
                    {{--                    <p class="sm:hidden">Step 2 of 4</p>--}}
                </div>
            </div>
        </header>

        <main class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
            <h1 class="sr-only">Order information</h1>

            <section aria-labelledby="summary-heading" class="bg-gray-50 px-4 pt-16 pb-10 sm:px-6 lg:col-start-2 lg:row-start-1 lg:bg-transparent lg:px-0 lg:pb-16">
                <div class="mx-auto max-w-lg lg:max-w-none">
                    <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Jouw mandje</h2>

                    <ul role="list" class="divide-y divide-gray-200 text-sm font-medium text-gray-900">
                        <li class="flex items-start space-x-4 py-6">
                            <div class="flex-auto space-y-1">
                                <h3>Micro Backpack</h3>
                                <p class="text-gray-500">Moss</p>
                            </div>
                            <p class="flex-none text-base font-medium">$70.00</p>
                        </li>

                        <!-- More products... -->
                    </ul>

                    <dl class="hidden space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-900 lg:block">
                        <div class="flex items-center justify-between">
                            <dt class="text-gray-600">Subtotal</dt>
                            <dd>$320.00</dd>
                        </div>

                        <div class="flex items-center justify-between">
                            <dt class="text-gray-600">Taxes</dt>
                            <dd>$26.80</dd>
                        </div>

                        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                            <dt class="text-base">Total</dt>
                            <dd class="text-base">$361.80</dd>
                        </div>
                    </dl>

                    <div class="fixed inset-x-0 bottom-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
                        <div class="relative z-10 border-t border-gray-200 bg-white px-4 sm:px-6">
                            <div class="mx-auto max-w-lg">
                                <button type="button" class="flex w-full items-center py-6 font-medium" aria-expanded="false">
                                    <span class="mr-auto text-base">Total</span>
                                    <span class="mr-2 text-base">$361.80</span>
                                    <!-- Heroicon name: mini/chevron-up -->
                                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <!--
                              Mobile summary overlay, show/hide based on mobile summary state.

                              Entering: "transition-opacity ease-linear duration-300"
                                From: "opacity-0"
                                To: "opacity-100"
                              Leaving: "transition-opacity ease-linear duration-300"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                            <!--
                              Mobile summary, show/hide based on mobile summary state.

                              Entering: "transition ease-in-out duration-300 transform"
                                From: "translate-y-full"
                                To: "translate-y-0"
                              Leaving: "transition ease-in-out duration-300 transform"
                                From: "translate-y-0"
                                To: "translate-y-full"
                            -->
                            <div class="relative bg-white px-4 py-6 sm:px-6">
                                <dl class="mx-auto max-w-lg space-y-6">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-gray-600">Subtotal</dt>
                                        <dd>$320.00</dd>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <dt class="text-gray-600">Shipping</dt>
                                        <dd>$15.00</dd>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <dt class="text-gray-600">Taxes</dt>
                                        <dd>$26.80</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <form class="px-4 pt-16 pb-36 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16">
                <div>
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
                            <label for="maandelijks"
                                   class="ml-3 block text-sm font-medium text-gray-700">Maandelijks</label>
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

                <div x-data="{ open: false }" class="flex mt-6">
                    <!-- Trigger -->
                    <span x-on:click="open = true">
                        <button type="button"
                                class="inline-flex items-center rounded-md border border-transparent bg-pink-100 px-4 py-2 my-4 text-sm font-medium text-pink-700 hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                            Redeem voucher
                        </button>
                    </span>
                    <!-- Modal -->
                    <div
                        x-show="open"
                        style="display: none"
                        x-on:keydown.escape.prevent.stop="open = false"
                        role="dialog"
                        aria-modal="true"
                        x-id="['modal-title']"
                        :aria-labelledby="$id('modal-title')"
                        class="fixed inset-0 z-10 overflow-y-auto"
                    >
                        <!-- Overlay -->
                        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>
                        <!-- Panel -->
                        <div
                            x-show="open" x-transition
                            x-on:click="open = false"
                            class="relative flex min-h-screen items-center justify-center p-4"
                        >
                            <div
                                x-on:click.stop
                                x-trap.noscroll.inert="open"
                                class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-12 shadow-lg"
                            >
                                <div>
                                    <label for="voucher" class="block text-sm font-medium text-gray-700">Voucher</label>
                                    <div class="mt-1">
                                        <input type="text" name="voucher" id="voucher"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                    </div>
                                </div>
                                <!-- Buttons -->
                                <div class="mt-8 flex space-x-2">
                                    <button type="button" x-on:click="open = false" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                                        Redeem
                                    </button>

                                    <button type="button" x-on:click="open = false" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:items-center sm:justify-between">
                    <a href="{{ route('zakelijke-checkout-step3') }}" type="submit" class="w-full rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">Continue</a>
                    <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">Click here to finish your order.</p>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
