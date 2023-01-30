<x-app-layout>
    @section('title', 'Checkout')
    <div x-data="{ step: 1 }" @step1.window="step = 1" @step2.window="step = 2" @step3.window="step = 3"
         @step4.window="step = 4"
         class="bg-white">
        @livewireStyles
        <header class="relative border-b border-gray-200 bg-white text-sm font-medium text-gray-700">
            <div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8">
                <div class="relative flex justify-end sm:justify-center">
                    <div aria-label="Progress" class="sm:block">
                        <ol role="list" class="flex space-x-4 mr-12">
                            <li class="flex items-center">
                                <button type="button" @click="$dispatch('step1')" aria-current="page"
                                        :class="step === 1 && 'text-pink-600'">Abonnement
                                    keuze
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
                                        :class="step === 2 && 'text-pink-600'">Contact
                                    informatie
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
                    {{--                    <p class="sm:hidden">Step 2 of 4</p>--}}
                </div>
            </div>
        </header>
        <main class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
            <div x-show="step === 1">
                <form class="px-4 pt-16 pb-36 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16"
                      wire:submit.prevent="submit">
                    @csrf
                    <div>
                        <div x-cloak x-data="{ open: false, selected: 'Kies een locatie' }">
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
                                    <li @click="selected = 'Ulvenhout'"
                                        class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                        id="listbox-option-3" role="option">
                                        <span :class="selected === 'Ulvenhout' ? 'font-extrabold' : 'font-normal'"
                                              class="block truncate">Ulvenhout</span>
                                        <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                            <!-- Heroicon name: mini/check -->
                                            <svg x-show="selected === 'Ulvenhout'" class="h-5 w-5"
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
                    <div>
                        <!--Subscription choice-->
                        <fieldset class="mt-10 border-t border-gray-200 pt-10">
                            <legend class="sr-only">Subscription type</legend>
                            <h2 class="block text-sm font-medium text-gray-700">Kies hier je lidmaatschap</h2>
                            <div x-cloak x-data="{ choice: '' }" class="space-y-4 mt-1 max-h-72 overflow-y-auto p-1.5">
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
            </div>
            <div x-show="step === 2">
                <form class="px-4 pt-16 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-10"
                      wire:submit.prevent="submit" id="step2">
                    @csrf
                    <div class="mx-auto max-w-lg lg:max-w-none">
                        <section aria-labelledby="contact-info-heading">
                            <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact
                                information</h2>
                            <div class="mt-6">
                                <label for="userName" class="block text-sm font-medium text-gray-700">Naam</label>
                                <div class="mt-1">
                                    <input type="text" id="userName" name="userName" value="{{ old('userName') }}"
                                           wire:model.defer="userName"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="userEmail" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input type="email" id="userEmail" name="userEmail" value="{{ old('userEmail') }}"
                                           wire:model.defer="userEmail"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </section>
                        <section aria-labelledby="shipping-heading" class="mt-10">
                            <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Overige informatie</h2>
                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <label for="userPhone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                                    <div class="mt-1">
                                        <input type="text" id="userPhone" name="userPhone"
                                               value="{{ old('userPhone') }}" wire:model.defer="userPhone"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="userPostalCode"
                                           class="block text-sm font-medium text-gray-700">Postcode</label>
                                    <div class="mt-1">
                                        <input type="text" id="userPostalCode" name="userPostalCode"
                                               value="{{ old('userPostalCode') }}" wire:model.defer="userPostalCode"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        @error('postalCode') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="userHouseNumber"
                                           class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                    <div class="mt-1">
                                        <input type="text" id="userHouseNumber" name="userHouseNumber"
                                               value="{{ old('userHouseNumber') }}" wire:model.defer="userHouseNumber"
                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                        @error('houseNumber') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
                <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:justify-between mb-6">
                    <button type="button" @click="step = 3"
                            class="h-9 w-full rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">
                        Continue
                    </button>
                    <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">Click here for the next
                        step.</p>
                </div>
            </div>
            <div x-show="step === 3" class="mt-6">
                <div class="mx-auto max-w-lg">
                    <div>
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
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
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
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
                </div>

            </div>
{{--            <div x-show="step === 4" class="mt-10 pt-6 mb-6">--}}
{{--                <p> By placing this order you declare to accept the terms and our privacy regulation.--}}
{{--                </p>--}}
{{--                <button type="submit"--}}
{{--                        class="h-9 w-96 rounded-md border border-transparent bg-pink-600 py-2 px-4 mt-6 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6">--}}
{{--                    Finish transaction--}}
{{--                </button>--}}
{{--            </div>--}}
            <livewire:mandje/>
        </main>
    </div>
    @livewireScripts
</x-app-layout>
