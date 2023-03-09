<x-app-layout>
    @livewireStyles
    @section('title', 'Checkout')
    <div x-data="{ step: 1 }" @step1.window="step = 1" @step2.window="step = 2" @step3.window="step = 3"
         @step4.window="step = 4">
        <div class="bg-white">
            <header class="relative border-b border-gray-200 bg-white text-sm font-medium text-gray-700">
                <div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8">
                    <div class="relative flex justify-end sm:justify-center">
                        <div aria-label="Progress" class="sm:block">
                            <ol role="list" class="flex space-x-1">
                                <li class="flex items-center">
                                    <button type="button" @click="$dispatch('step1')" aria-current="page"
                                            :class="step === 1 && 'text-pink-600'">Contact informatie
                                    </button>
                                    <!-- Heroicon name: mini/chevron-right -->
                                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <button type="button" @click="$dispatch('step2')"
                                            :class="step === 2 && 'text-pink-600'">Abonnement keuze
                                    </button>
                                    <!-- Heroicon name: mini/chevron-right -->
                                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <button type="button" @click="$dispatch('step3')"
                                            :class="step === 3 && 'text-pink-600'">Kenteken
                                    </button>
                                    <!-- Heroicon name: mini/chevron-right -->
                                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <button type="button" @click="$dispatch('step4')"
                                            :class="step === 4 && 'text-pink-600'">Bevestigen
                                    </button>
                                </li>
                            </ol>
                        </div>
                        {{--                                        <p class="sm:hidden">Step 2 of 4</p>--}}
                    </div>
                </div>
                @section('1car', '1 car = 0% sale')
                @section('2cars', '2 cars = 2% sale')
                @section('3cars', '3 cars = 3% sale')
                @section('4cars', '4 cars = 4% sale')
                @section('5cars', '5 or more cars = 5% sale')
            </header>
            <main>
                <div x-show="step === 1"
                     class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
                    <form class="px-4 pt-16 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16"
                          action="#"
                          method="POST" id="step1">
                        @csrf
                        <div class="mx-auto max-w-lg lg:max-w-none">
                            <section aria-labelledby="contact-info-heading">
                                <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact
                                    information</h2>
                                <div class="mt-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                    <livewire:summary/>
                    <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:justify-between mb-6">
                        <button type="submit"
                                onclick="event.preventDefault();document.getElementById('step1').submit();"
                                class="h-9 w-full rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">
                            Continue
                        </button>
                        <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">Click here for the next
                            step.</p>
                    </div>
                </div>
                <div x-show="step === 2"
                     class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
                    <form class="px-4 pt-16 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16"
                          wire:submit.prevent="submit">
                        @csrf
                        <div>
                            <!--Subscription choice-->
                            <fieldset>
                                <legend class="sr-only">Subscription type</legend>
                                <h2 class="block text-sm font-medium text-gray-700">Kies hier je lidmaatschap</h2>
                                <div x-cloak x-data="{ choice: '' }"
                                     class="space-y-4 mt-1 max-h-72 overflow-y-auto p-1.5">
                                    @foreach($subscriptions as $subscription)
                                        <div>
                                            <label @click="choice = {{ json_encode($subscription['name']) }}"
                                                   class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-none sm:flex sm:justify-between"
                                                   :class="choice === {{ json_encode($subscription['name']) }} ? 'border-pink-600 ring-2 ring-pink-600' : ''">
                                                <input type="radio" name="subscription" class="sr-only"
                                                       aria-labelledby="server-size-0-label"
                                                       value="{{ $subscription['_id'] }}"
                                                       @click="$dispatch('update-subscription', { price: '€ {{ $subscription['price'] }}' , name: {{ json_encode($subscription['name']) }} }), $wire.save('update-subscription')"
                                                       aria-describedby="server-size-0-description-0 server-size-0-description-1">
                                                <span class="flex items-center">
                                                    <span class="flex flex-col text-sm">
                                                        <span id="server-size-0-label"
                                                              class="font-medium text-gray-900">{{ $subscription['name'] }}</span>
                                                        <span id="server-size-0-description-0"
                                                              class="text-gray-500 text-xs">
                                                            {{ $subscription['description'] }}
                                                        </span>
                                                    </span>
                                                </span>
                                                <span id="server-size-0-description-1"
                                                      class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                                    <span
                                                        class="font-medium text-gray-900">€ {{ $subscription['price'] }}</span>
                                                    {{--                                            <span class="ml-1 text-gray-500 sm:ml-0">/mo</span>--}}
                                                </span>
                                                <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                                      aria-hidden="true"></span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>
                        <div x-cloak x-data="{ open: false }" class="flex mt-6">
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
                                <div x-show="open" x-transition.opacity
                                     class="fixed inset-0 bg-black bg-opacity-50"></div>
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
                                            <label for="voucher"
                                                   class="block text-sm font-medium text-gray-700">Voucher</label>
                                            <div class="mt-1">
                                                <input type="text" name="voucher" id="voucher"
                                                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="mt-8 flex space-x-2">
                                            <button type="button" x-on:click="open = false"
                                                    class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                                                Redeem
                                            </button>
                                            <button type="button" x-on:click="open = false"
                                                    class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:items-center sm:justify-between">
                            <button type="button" @click="step = 2"
                                    class="w-full rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">
                                Continue
                            </button>
                            <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">Click here to
                                continue</p>
                        </div>
                    </form>
                    <livewire:summary/>
                </div>
                <div x-show="step === 3"
                     class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
                    <div class="mx-auto max-w-lg">
                        <div>
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                                </svg>
                                <h2 class="mt-2 text-lg font-medium text-gray-900">Voeg je kenteken(s) toe</h2>
                            </div>
                            <form action="#" class="mt-6 flex">
                                <label for="userLicensePlate" class="sr-only">License plate</label>
                                <input type="text" name="userLicensePlate" id="userLicensePlate"
                                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                       placeholder="Enter an license plate">
                                @error('kenteken') <span class="text-red-500">{{ $message }}</span> @enderror
                                <button type="submit" wire:model.defer="userLicensePlate"
                                        class="ml-4 flex-shrink-0 rounded-full border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 4.5v15m7.5-7.5h-15"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-500">Je toegevoegde kenteken(s)</h3>
                            <ul role="list" class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200">
                                @if(is_array($validateOrCreateUser) || is_object($validateOrCreateUser))
                                    @foreach($validateOrCreateUser as $user)
                                        @if(isset($user['userLicensePlate']))
                                            <li class="flex items-center justify-between space-x-3 py-4">
                                                <div class="flex min-w-0 flex-1 items-center space-x-3">
                                                    <div class="min-w-0 flex-1">
                                                        <p class="truncate text-sm font-medium text-gray-900">Lindsay
                                                            Walton</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button"
                                                            class="inline-flex items-center rounded-full border border-transparent bg-red-500 py-2 px-3 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                                        <!-- Heroicon name: mini/plus -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                             fill="currentColor" class="w-5 h-5 text-white mr-2">
                                                            <path fill-rule="evenodd"
                                                                  d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                        <span class="text-sm font-medium text-white"> Delete <span
                                                                class="sr-only">Lindsay Walton</span> </span>
                                                    </button>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="my-24">
                            <section aria-labelledby="shipping-heading" class="mt-10">
                                <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Overige
                                    informatie</h2>
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                                    <div class="sm:col-span-3">
                                        <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                                        <div class="mt-1">
                                            <input type="text" id="telefoonnummer" name="phone"
                                                   value="{{ old('phone') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="postal-code"
                                               class="block text-sm font-medium text-gray-700">Postcode</label>
                                        <div class="mt-1">
                                            <input type="text" id="postal-code" name="postalCode_private"
                                                   value="{{ old('postalCode_private') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="huisnummer"
                                               class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                        <div class="mt-1">
                                            <input type="text" id="huisnummer" name="houseNumber_private"
                                                   value="{{ old('houseNumber_private') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section aria-labelledby="shipping-heading" class="mt-10">
                                <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Business
                                    informatie</h2>
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                                    <div class="sm:col-span-3">
                                        <label for="company"
                                               class="block text-sm font-medium text-gray-700">Bedrijfsnaam</label>
                                        <div class="mt-1">
                                            <input type="text" id="company" name="companyName"
                                                   value="{{ old('companyName') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="fin" class="block text-sm font-medium text-gray-700">Fiscaal
                                            Identificatie
                                            Nummer</label>
                                        <div class="mt-1">
                                            <input type="text" id="fin" name="fin" value="{{ old('fin') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="kvk" class="block text-sm font-medium text-gray-700">KvK
                                            Nummer</label>
                                        <div class="mt-1">
                                            <input type="text" id="kvk" name="kvk" value="{{ old('kvk') }}"
                                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 gap-y-6 gap-x-20 sm:grid-cols-3">
                                    <div class="mt-6">
                                        <label for="straat"
                                               class="block text-sm font-medium text-gray-700">Straat</label>
                                        <div class="mt-1">
                                            <input type="text" id="straat" name="street_business"
                                                   value="{{ old('street_business') }}"
                                                   class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <label for="huisnummer"
                                               class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                        <div class="mt-1">
                                            <input type="text" id="huisnummer" name="houseNumber_business"
                                                   value="{{ old('houseNumber_business') }}"
                                                   class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 gap-y-6 gap-x-20 sm:grid-cols-3">
                                    <div class="mt-6">
                                        <label for="postcode"
                                               class="block text-sm font-medium text-gray-700">Postcode</label>
                                        <div class="mt-1">
                                            <input type="text" id="postcode" name="postalCode_business"
                                                   value="{{ old('postalCode_business') }}"
                                                   class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <label for="stad"
                                               class="block text-sm font-medium text-gray-700">Stad</label>
                                        <div class="mt-1">
                                            <input type="text" id="stad" name="city_business"
                                                   value="{{ old('city_business') }}"
                                                   class="block rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <livewire:summary/>
                </div>
                <div x-show="step === 4" class="relative mx-auto max-w-xl lg:px-8">
                    <livewire:summary/>
                    <div class="relative flex items-start">
                        <div class="flex h-5 items-center">
                            <input id="terms" name="terms" type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-medium text-gray-700">By placing this order you declare to
                                accept <a
                                    href="https://www.basicwash.nl/wp-content/uploads/2021/08/Algemene-voorwaarden-Berkman-Carwash-BV.pdf"
                                    target="_blank" class="underline text-cyan-600 font-bold">terms</a> and our <a
                                    href="https://www.walnutloyalty.com/nl/privacy/" class="underline text-cyan-600 font-bold">privacy regulation</a></label>
                        </div>
                    </div>
                    <button type="submit"
                            class="h-9 w-96 rounded-md border border-transparent bg-pink-600 py-2 mx-20 px-4 mt-6 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last">
                        Finish transaction
                    </button>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>