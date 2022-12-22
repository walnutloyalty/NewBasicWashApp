<x-app-layout>
    <div class="bg-gray-50">
        <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Checkout</h2>

            <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                <div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">Kenteken</h2>

                        <div class="mt-4">
                            <label for="kenteken" class="block text-sm font-medium text-gray-700">Uw lidmaatschap geldt voor dit kenteken</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-blue-600 px-3 text-gray-500 sm:text-sm pt-4 text-white">NL</span>
                                    <input type="text" name="kenteken" id="kenteken" placeholder="AB12345" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <div x-data="{ open: false }">
                            <label id="listbox-label" class="block text-sm font-medium text-gray-700">Waar wil je wassen</label>
                            <div class="relative mt-1">
                                <button @click="open = true" @click.away="open = false" type="button" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-1 focus:ring-cyan-600 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                    <span class="block truncate">Tom Cook</span>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <!-- Heroicon name: mini/chevron-up-down -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>

                                <!--
                                  Select popover, show/hide based on select state.

                                  Entering: ""
                                    From: ""
                                    To: ""
                                  Leaving: "transition ease-in duration-100"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <ul x-show="open" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
                                    <!--
                                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                                      Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                                    -->
                                    <li class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4" id="listbox-option-0" role="option">
                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                        <span class="font-normal block truncate">Wade Cooper</span>

                                        <!--
                                          Checkmark, only display for selected option.

                                          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                        -->
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </li>

                                    <!-- More items... -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Subscription choice-->
                    <fieldset class="mt-10 border-t border-gray-200 pt-10">
                        <legend class="sr-only">Server size</legend>
                        <h2 class="block text-sm font-medium text-gray-700">Kies hier je lidmaatschap</h2>
                        <div x-data="{ choice: '' }" class="space-y-4">
                            <!--
                              Checked: "border-transparent", Not Checked: "border-gray-300"
                              Active: "border-indigo-500 ring-2 ring-indigo-500"
                            -->
                            <label class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between" :class="choice ? 'bg-cyan-600' : ''">
                                <input x-model="choice" type="radio" name="premium-plus" value="Hobby" class="sr-only" aria-labelledby="server-size-0-label" aria-describedby="server-size-0-description-0 server-size-0-description-1">
                                <span  class="flex items-center">
                                    <span @click="choice = 'Premium plus'" class="flex flex-col text-sm" >
                                        <span  id="server-size-0-label" class="font-medium text-gray-900" >Premium plus</span>
                                        <span id="server-size-0-description-0" class="text-gray-500">
                                        </span>
                                    </span>
                                </span>
                                <span id="server-size-0-description-1" class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                    <span class="font-medium text-gray-900">$40</span>
                                    <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                </span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                            </label>

                            <!--
                              Checked: "border-transparent", Not Checked: "border-gray-300"
                              Active: "border-indigo-500 ring-2 ring-indigo-500"
                            -->
                            <label class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between" :class="choice ? 'bg-cyan-600' : ''">
                                <input x-model="choice" type="radio" name="premium" value="Startup" class="sr-only" aria-labelledby="server-size-1-label" aria-describedby="server-size-1-description-0 server-size-1-description-1">
                                <span @click="choice = 'Premium'" class="flex items-center">
                                    <span class="flex flex-col text-sm">
                                        <span id="server-size-1-label" class="font-medium text-gray-900">Premium</span>
                                        <span id="server-size-1-description-0" class="text-gray-500">
                                        </span>
                                    </span>
                                </span>
                                <span id="server-size-1-description-1" class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                    <span class="font-medium text-gray-900">$80</span>
                                    <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                </span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                            </label>

                            <!--
                              Checked: "border-transparent", Not Checked: "border-gray-300"
                              Active: "border-indigo-500 ring-2 ring-indigo-500"
                            -->
                            <label class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between">
                                <input type="radio" name="server-size" value="Business" class="sr-only" aria-labelledby="server-size-2-label" aria-describedby="server-size-2-description-0 server-size-2-description-1">
                                <span class="flex items-center">
                                    <span class="flex flex-col text-sm">
                                        <span id="server-size-2-label" class="font-medium text-gray-900">Gold</span>
                                        <span id="server-size-2-description-0" class="text-gray-500">
                                        </span>
                                    </span>
                                </span>
                                <span id="server-size-2-description-1" class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                    <span class="font-medium text-gray-900">$160</span>
                                    <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                </span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                            </label>

                            <!--
                              Checked: "border-transparent", Not Checked: "border-gray-300"
                              Active: "border-indigo-500 ring-2 ring-indigo-500"
                            -->
                            <label class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between">
                                <input type="radio" name="server-size" value="Enterprise" class="sr-only" aria-labelledby="server-size-3-label" aria-describedby="server-size-3-description-0 server-size-3-description-1">
                                <span class="flex items-center">
                                    <span class="flex flex-col text-sm">
                                        <span id="server-size-3-label" class="font-medium text-gray-900">Basic</span>
                                    </span>
                                </span>
                                <span id="server-size-3-description-1" class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                    <span class="font-medium text-gray-900">$240</span>
                                    <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>
                                </span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>

                    <!-- Payment -->
                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <h2 class="text-lg font-medium text-gray-900">Kies hier je betalingswijze</h2>

                        <fieldset class="mt-4">
                            <legend class="sr-only">Payment type</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input id="credit-card" name="payment-type" type="radio" checked
                                           class="h-4 w-4 border-gray-300 text-pink-600 focus:ring-cyan-600">
                                    <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700">Credit
                                        card</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="paypal" name="payment-type" type="radio"
                                           class="h-4 w-4 border-gray-300 text-pink-600 focus:ring-cyan-600">
                                    <label for="paypal"
                                           class="ml-3 block text-sm font-medium text-gray-700">PayPal</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="etransfer" name="payment-type" type="radio"
                                           class="h-4 w-4 border-gray-300 text-pink-600 focus:ring-cyan-600">
                                    <label for="etransfer"
                                           class="ml-3 block text-sm font-medium text-gray-700">eTransfer</label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                            <div class="col-span-4">
                                <label for="card-number" class="block text-sm font-medium text-gray-700">Card
                                    number</label>
                                <div class="mt-1">
                                    <input type="text" id="card-number" name="card-number" autocomplete="cc-number"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>

                            <div class="col-span-4">
                                <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on
                                    card</label>
                                <div class="mt-1">
                                    <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>

                            <div class="col-span-3">
                                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration
                                    date
                                    (MM/YY)</label>
                                <div class="mt-1">
                                    <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                <div class="mt-1">
                                    <input type="text" name="cvc" id="cvc" autocomplete="csc"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order summary -->
                <div class="mt-10 lg:mt-0">
                    <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="flex py-6 px-4 sm:px-6">
                                <div class="flex-shrink-0">
                                    <h2 class="text-xl font-bold text-gray-900"> Je mandje</h2>
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
