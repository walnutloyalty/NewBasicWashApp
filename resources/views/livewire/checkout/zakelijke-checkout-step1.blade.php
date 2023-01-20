<x-app-layout>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    @section('title', 'Checkout')
    <div class="bg-white">
        <header class="relative border-b border-gray-200 bg-white text-sm font-medium text-gray-700">
            <div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8">
                <div class="relative flex justify-end sm:justify-center">
                    <div aria-label="Progress" class="sm:block">
                        <ol role="list" class="flex space-x-4 mr-12">
                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step1') }}"
                                   class="@if(Request::routeIs('zakelijke-checkout-step1')) text-pink-600 @endif">Contact
                                    informatie</a>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step2') }}" aria-current="page"
                                   class="@if(Request::routeIs('zakelijke-checkout-step2')) text-pink-600 @endif">Abonnement
                                    keuze</a>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ route('zakelijke-checkout-step3') }}"
                                   class="@if(Request::routeIs('zakelijke-checkout-step3')) text-pink-600 @endif">Bevestigen</a>
                            </li>
                        </ol>
                    </div>
                    {{--                                        <p class="sm:hidden">Step 2 of 4</p>--}}
                </div>
            </div>
        </header>
        <main class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
            <h1 class="sr-only">Order information</h1>
            <section aria-labelledby="summary-heading"
                     class="bg-gray-50 px-4 pt-16 pb-10 sm:px-6 lg:col-start-2 lg:row-start-1 lg:bg-transparent lg:px-0 lg:pb-16">
                <div x-data="{ total: false }" class="mx-auto max-w-lg lg:max-w-none">
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
                    <div
                        class="fixed inset-x-0 bottom-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
                        <div class="relative z-10 border-t border-gray-200 bg-white px-4 sm:px-6">
                            <div class="mx-auto max-w-lg">
                                <button @click="total = true" @click.away="total = false" type="button"
                                        class="flex w-full items-center py-6 font-medium"
                                        aria-expanded="false">
                                    <span class="mr-auto text-base">Total</span>
                                    <span class="mr-2 text-base">$361.80</span>
                                    <!-- Heroicon name: mini/chevron-up -->
                                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div x-show="total">
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
            <form class="px-4 pt-16 pb-36 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16"
                  action="{{ route('zakelijke-checkout-step1-filled') }}"
                  method="POST" id="step1">
                <div class="mx-auto max-w-lg lg:max-w-none">
                    <section aria-labelledby="contact-info-heading">
                        <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact information</h2>
                        <div class="mt-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"
                                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                            </div>
                        </div>
                    </section>
                    <section aria-labelledby="shipping-heading" class="mt-10">
                        <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Overige informatie</h2>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                            <div class="sm:col-span-3">
                                <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                                <div class="mt-1">
                                    <input type="text" id="telefoonnummer" name="telefoonnummer"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div>
                                <label for="postal-code"
                                       class="block text-sm font-medium text-gray-700">Postcode</label>
                                <div class="mt-1">
                                    <input type="text" id="postal-code" name="postal-code"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div>
                                <label for="huisnummer"
                                       class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                <div class="mt-1">
                                    <input type="text" id="huisnummer" name="huisnummer"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div>
                                <label for="kenteken"
                                       class="block text-sm font-medium text-gray-700">Kenteken</label>
                                <div class="mt-1 mb-4">
                                    <input type="text" id="kenteken" name="kenteken" placeholder="XX-XX-XX"
                                           class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                                <button type="submit"
                                        class="text-pink-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor"
                                         class="w-5 h-5 inline">
                                        <path
                                            d="M10.75 6.75a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z"/>
                                    </svg>
                                    Voeg kenteken toe
                                </button>
                            </div>
                        </div>
                    </section>
                    <section aria-labelledby="shipping-heading" class="mt-10">
                        <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Business informatie</h2>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                            <div class="sm:col-span-3">
                                <label for="company"
                                       class="block text-sm font-medium text-gray-700">Bedrijfsnaam</label>
                                <div class="mt-1">
                                    <input type="text" id="company" name="company"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="fin" class="block text-sm font-medium text-gray-700">Fiscaal Identificatie
                                    Nummer</label>
                                <div class="mt-1">
                                    <input type="text" id="fin" name="fin"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div>
                                <label for="kvk" class="block text-sm font-medium text-gray-700">KvK Nummer</label>
                                <div class="mt-1">
                                    <input type="text" id="kvk" name="kvk"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-20 sm:grid-cols-3">
                            <div class="mt-6">
                                <label for="straat" class="block text-sm font-medium text-gray-700">Straat</label>
                                <div class="mt-1">
                                    <input type="text" id="straat" name="straat"
                                           class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="huisnummer"
                                       class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                <div class="mt-1">
                                    <input type="text" id="huisnummer" name="huisnummer"
                                           class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-20 sm:grid-cols-3">
                            <div class="mt-6">
                                <label for="straat" class="block text-sm font-medium text-gray-700">Postcode</label>
                                <div class="mt-1">
                                    <input type="text" id="straat" name="straat"
                                           class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="huisnummer"
                                       class="block text-sm font-medium text-gray-700">Stad</label>
                                <div class="mt-1">
                                    <input type="text" id="huisnummer" name="huisnummer"
                                           class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </form>
            <ul role="list">
                @foreach($kenteken as $extraKenteken)
                    @if(isset($extraKenteken))
                        <h3 class="text-pink-600 mt-8">Al uw toegevoegde kentekens</h3>

                        <li class="flex py-2 my-4">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">{{ $extraKenteken->kenteken ?? ''}}</p>
                            </div>
                            <form method="POST" action="{{ route('zakelijke-delete-kenteken') }}" id="delete-kenteken">
                                @csrf
                                <input type="text" class="sr-only" name="id"
                                       value="{{ $extraKenteken->id }}">
                                <button type="submit"
                                        onclick="event.preventDefault();document.getElementById('delete-kenteken').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" class="w-5 h-5 ml-6 text-red-600">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:justify-between mb-6">
                <button type="submit" onclick="event.preventDefault();document.getElementById('step1').submit();"
                        class="w-full rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">
                    Continue
                </button>
                <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">Click here for the next
                    step.</p>
            </div>
            @livewireScripts
        </main>
    </div>
</x-app-layout>
