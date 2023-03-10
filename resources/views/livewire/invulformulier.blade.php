<div x-on:ticketcreated.window="done = null; setTimeout(() => {done = true}, 200)" x-data="{ done: false }">

    <form x-transition x-show="! done" class="space-y-8 divide-y divide-gray-200 lg:mx-96 mb-24">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div class="text-center">
                    <h3 class="text-3xl font-extrabold leading-6 text-pink-600">{{ __('Invulformulier') }}</h3>
                    <p class="mt-4 text-lg text-black">
                        {{ __('Gebruik onderstaand formulier om zo gericht mogelijk antwoord te krijgen op je vraag!') }}
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="email" name="email" id="email" wire:model="email"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                placeholder="you@example.com" required>
                        </div>
                        @error('email')
                            <span class="text-pink-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="naam"
                            class="block text-sm font-medium text-gray-700">{{ __('Naam') }}</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="naam" id="naam" wire:model="name"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                required>
                        </div>
                        @error('name')
                            <span class="text-pink-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="telefoon"
                            class="block text-sm font-medium text-gray-700">{{ __('Telefoonnummer') }}</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="telefoon" id="telefoon" wire:model="phone_number"
                                placeholder="+31651094484"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                required>
                        </div>
                        @error('phone_number')
                            <span class="text-pink-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="kenteken"
                            class="block text-sm font-medium text-gray-700">{{ __('Kenteken') }}</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="kenteken" id="kenteken" wire:model="licenseplate"
                                placeholder="XX123X"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                required>
                        </div>
                        @error('licenseplate')
                            <span class="text-pink-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <div>
                            <div x-data="{ open: false, selected: 'Kies een onderwerp' }">
                                <label for="onderwerp"
                                    class="block text-sm font-medium text-gray-700">{{ __('Onderwerp') }}</label>
                                <div class="relative mt-1">
                                    <button @click="open = true" @click.away="open = false" type="button"
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-1 focus:ring-cyan-600 sm:text-sm"
                                        aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                        <span x-text="selected" class="block truncate"></span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                            <!-- Heroicon name: mini/chevron-up-down -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul x-show="open"
                                        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                        tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                        aria-activedescendant="listbox-option-3">
                                        <li @click="selected = 'Abonnement informatie - Carwash'; $wire.set('subject', 'Abonnement informatie - Carwash'); open = false"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-0" role="option">
                                            <span
                                                :class="selected === 'Abonnement informatie - Carwash' ? 'font-extrabold' :
                                                    'font-normal'"
                                                class="block truncate">{{ __('Abonnement informatie - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Abonnement informatie - Carwash'"
                                                    class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li @click="selected = 'Wijzigen gegevens - Carwash'; $wire.set('subject', 'Wijzigen gegevens - Carwash'); open = false;"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-1" role="option">
                                            <span
                                                :class="selected === 'Wijzigen gegevens - Carwash' ? 'font-extrabold' :
                                                    'font-normal'"
                                                class="block truncate">{{ __('Wijzigen gegevens - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Wijzigen gegevens - Carwash'"
                                                    class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li @click="selected = 'Betalingen - Carwash'; $wire.set('subject', 'Betalingen - Carwash'); open = false;"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-2" role="option">
                                            <span
                                                :class="selected === 'Betalingen - Carwash' ? 'font-extrabold' : 'font-normal'"
                                                class="block truncate">{{ __('Betalingen - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Betalingen - Carwash'" class="h-5 w-5"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li @click="selected = 'Schade, verlies of diefstal - Carwash'; $wire.set('subject', 'Schade, verlies of diefstal - Carwash'); open = false;"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-3" role="option">
                                            <span
                                                :class="selected === 'Schade, verlies of diefstal - Carwash' ?
                                                    'font-extrabold' :
                                                    'font-normal'"
                                                class="block truncate">{{ __('Schade, verlies of diefstal - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Schade, verlies of diefstal - Carwash'"
                                                    class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li @click="selected = 'Zakelijk - Carwash'; $wire.set('subject', 'Zakelijk - Carwash'); open = false;"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-3" role="option">
                                            <span
                                                :class="selected === 'Zakelijk - Carwash' ? 'font-extrabold' : 'font-normal'"
                                                class="block truncate">{{ __('Zakelijk - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Zakelijk - Carwash'" class="h-5 w-5"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li @click="selected = 'Overig - Carwash'; $wire.set('subject', 'Overig - Carwash'); open = false;"
                                            class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                            id="listbox-option-3" role="option">
                                            <span
                                                :class="selected === 'Overig - Carwash' ? 'font-extrabold' : 'font-normal'"
                                                class="block truncate">{{ __('Overig - Carwash') }}</span>
                                            <span
                                                class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                                <!-- Heroicon name: mini/check -->
                                                <svg x-show="selected === 'Overig - Carwash'" class="h-5 w-5"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    @error('subject')
                                        <span class="text-pink-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="comment"
                            class="block text-sm font-medium leading-6 text-gray-900">Omschrijving</label>
                        <textarea rows="4" wire:model="description" name="comment" id="comment" row=7
                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                        @error('description')
                            <span class="text-pink-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button" wire:click="send"
                    class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-600">

                    <svg wire:loading wire:target="send" class="animate-spin mx-auto h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10"
                            stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span wire:target="send" wire:loading.remove>
                        Versturen
                    </span>
                </button>
            </div>
        </div>
    </form>

    <div x-transition x-show="done" class="pt-16">
        <h1 class="text-center text-5xl font-extrabold text-pink-600">{{ __('Succes!') }}<h1>
                <h2 class="text-center text-lg mt-6">We hebben uw vraag correct ontvangen. U ontvangt binnen enkele seconden een bevestigings mail</h2>
    </div>
</div>
