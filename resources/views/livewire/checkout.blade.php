<main x-transition x-show="checkout"
    x-on:setstep.window="step = null; setTimeout(function () {
    step = $event.detail.step
}, 500)"
    x-data="{ step: 1 }"
    class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
    <div class="relative flex justify-end border-b border-gray-200 col-span-full sm:justify-center">
        <div aria-label="Progress" class="py-4 sm:block">
            <ol role="list" class="flex space-x-1">
                <li class="flex items-center">
                    <button type="button" wire:click="step(1)" aria-current="page"
                        :class="step === 1 && 'text-pink-600'">Contact
                        informatie
                    </button>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button type="button" wire:click="step(2)" :class="step === 2 && 'text-pink-600'">
                        Kentekens
                    </button>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button type="button" wire:click="step(3)" :class="step === 3 && 'text-pink-600'">Bevestigen
                    </button>
                </li>
            </ol>
        </div>
        {{--                    <p class="sm:hidden">Step 2 of 4</p> --}}
    </div>
    <div x-transition x-show="step === 1">
        <form class="px-4 pt-8 pb-36 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16"
            wire:submit.prevent="submit">
            @csrf
                <div class="mx-auto max-w-lg mt-8 lg:max-w-none">
                    <section aria-labelledby="contact-info-heading">
                        <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact
                            information</h2>
                        <div class="mt-6">
                            <label for="userName" class="block text-sm font-medium text-gray-700">Naam</label>
                            <div class="mt-1">
                                <input type="text" wire:model="name"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                    placeholder="John Doe">
                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="userEmail" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" wire:model="email"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                    placeholder="my@email.com">
                                @error('email')
                                    <span class=" text-sm text-pink-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </section>
                    @if ($type == 'particulier')

                        <section aria-labelledby="shipping-heading" class="mt-4">
                            <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Overige informatie</h2>
                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                                <div class="sm:col-span-2">
                                    <label for="userPhone"
                                        class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="phone_number"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="+31612341234">
                                        @error('phone_number')
                                            <span class="text-sm text-pink-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="userPostalCode"
                                        class="block text-sm font-medium text-gray-700">Postcode</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="postcode"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="1234AB">
                                        @error('postcode')
                                            <span class="text-sm text-pink-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="userHouseNumber"
                                        class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="house_number"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="123A">
                                        @error('house_number')
                                            <span class="text-pink-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </section>
                     @endif
                    </div>
            @if ($type == 'particulier')

            {{-- <div class="mt-4">
                <div x-cloak x-data="{ open: false, selected: 'Kies een locatie' }">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">Waar wil je
                        wassen</label>
                    <div class="relative mt-1">
                        <button @click="open = true" @click.away="open = false" type="button"
                            class="relative w-full cursor-default rounded-md border h-10 border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-1 focus:ring-cyan-600 sm:text-sm"
                            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="block truncate">{{ $location ?? 'Kies een locatie' }}</span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                <!-- Heroicon name: mini/chevron-up-down -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        @error('location')
                            <span class="text-pink-500 text-sm">{{ $message }}</span>
                        @enderror
                        <ul x-show="open"
                            class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            aria-activedescendant="listbox-option-3">
                            <li @click="selected = 'Breda'; $wire.$set('location', 'Breda')"
                                class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                id="listbox-option-0" role="option">
                                <span :class="selected === 'Breda' ? 'font-extrabold' : 'font-normal'"
                                    class="block truncate">Breda</span>
                                @if ($location === 'Breda')
                                    <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </li>
                            <li @click="selected = 'Hellevoetsluis'; $wire.$set('location', 'Hellevoetsluis')"
                                class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                id="listbox-option-1" role="option">
                                <span :class="selected === 'Hellevoetsluis' ? 'font-extrabold' : 'font-normal'"
                                    class="block truncate">Hellevoetsluis</span>
                                @if ($location === 'Hellevoetsluis')
                                    <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </li>
                            <li @click="selected = 'Sint willebrord'; $wire.$set('location', 'Sint willebrord')"
                                class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                id="listbox-option-2" role="option">
                                <span :class="selected === 'Sint willebrord' ? 'font-extrabold' : 'font-normal'"
                                    class="block truncate">Sint willebrord</span>
                                @if ($location === 'Sint willebrord')
                                    <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </li>
                            <li @click="selected = 'Terheijden'; $wire.$set('location', 'Terheijden')"
                                class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                id="listbox-option-3" role="option">
                                <span :class="selected === 'Terheijden' ? 'font-extrabold' : 'font-normal'"
                                    class="block truncate">Terheijden</span>
                                @if ($location === 'Terheijden')
                                    <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </li>
                            <li @click="selected = 'Ulvenhout'; $wire.$set('location', 'Ulvenhout')"
                                class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4 hover:bg-pink-100"
                                id="listbox-option-3" role="option">
                                <span :class="selected === 'Ulvenhout' ? 'font-extrabold' : 'font-normal'"
                                    class="block truncate">Ulvenhout</span>
                                @if ($location === 'Ulvenhout')
                                    <span class="text-pink-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            @endif

            <div x-cloak x-data="{ open: false }" class="flex mt-6">
                <!-- Modal -->
                <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false"
                    role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
                    class="fixed inset-0 z-10 overflow-y-auto">
                    <!-- Overlay -->
                    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>
                    <!-- Panel -->
                    <div x-show="open" x-transition x-on:click="open = false"
                        class="relative flex min-h-screen items-center justify-center p-4">
                        <div x-on:click.stop x-trap.noscroll.inert="open"
                            class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-12 shadow-lg">
                            <div>
                                <label for="voucher" class="block text-sm font-medium text-gray-700">Voucher</label>
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
        </form>
    </div>
    <div x-transition x-show="step === 2">
        <div class="mx-auto mt-4 max-w-lg">
            <div>
                <div class="text-center mt-16">
                  
                    <h2 class="mt-2 text-lg font-medium text-gray-900">Voeg je kenteken toe</h2>
                </div>
                <form action="#" class="mt-6 flex">
                    <label for="userLicensePlate" class="sr-only">Licenseplate</label>
                    <input type="text" name="userLicensePlate" wire:model="licenseplate" id="userLicensePlate"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                        placeholder="Enter a licenseplate">
                    <button type="button" wire:click="addLicensePlate" wire:loading.attr="disabled"
                        wire:target="addLicensePlate"
                        class="ml-4 flex-shrink-0 rounded-full border border-transparent bg-pink-600  p-2 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                        <svg wire:target="addLicensePlate" wire:loading.remove xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        <svg wire:loading wire:target="addLicensePlate"
                            class="animate-spin mx-auto h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </button>
                </form>
                @error('licenseplate')
                    <span class="text-pink-600 text-sm"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-500">Je toegevoegde kenteken</h3>
                <ul role="list" class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200">
                    @foreach ($licenseplates as $key => $plate)
                        <li
                            class="relative bg-white py-5 px-4 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 hover:bg-gray-50">
                            <div class="w-full flex justify-between">
                                <p class="truncate text-sm font-medium text-gray-900">{{ $plate }}</p>
                                <p wire:click="removePlate({{ $key }})"
                                    class=" cursor-pointer truncate text-sm text-pink-600">Remove</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @error('licenseplates')
                    <span class="text-pink-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div x-transition x-show="step === 3" class="pt-16">
        <h1 class="text-center text-5xl font-extrabold text-pink-600">Even geduld<h1>
        <h2 class="text-center text-lg mt-6">{{$loading_message}}</h2>
    </div>

    <div x-transition x-show="step === null" class="pt-16">
        <h1 class="text-center text-5xl font-extrabold text-pink-600">Even geduld<h1>
                <h2 class="text-center text-lg mt-6">We zijn even wat dingen aan het checken...</h2>
    </div>
    <div style="margin-top: 4rem; margin-right: 2rem;" class="lg:absolute lg:right-0 mr-4 bg-white">
        <div class="mx-auto max-w-2xl  px-4 sm:px-6 lg:px-0">
            <form class="mt-12">
                <section aria-labelledby="cart-heading">
                    <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                    <ul role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
                        @if (isset($selected))
                            <li class="flex py-6">
                                <div class="flex-shrink-0">
                                    <img src="{{ $selected['image'] }}"
                                        alt="Front side of mint cotton t-shirt with wavey lines pattern."
                                        class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                                    <div>
                                        <div class="flex justify-between">
                                            <h4 class="text-sm">
                                                <a href="#"
                                                    class="font-medium text-gray-700 hover:text-gray-800">{{ $selected['title'] }}</a>
                                            </h4>
                                        </div>
                                        <p class="mt-1 text-sm truncate text-gray-500">{{ $selected['description'] }}
                                        </p>
                                    </div>

                                    <div class="mt-4 flex flex-1 items-end justify-between">

                                        <div class=" w-full flex justify-between">
                                            <div>

                                            </div>
                                            <button wire:click="$set('selected', null)" type="button"
                                                class="text-sm font-medium text-pink-600 hover:text-pink-500">
                                                <span>Remove</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @else
                            <fieldset class="max-h-52 overflow-y-auto">
                                <div class="space-y-4">
                                    @foreach ($subscriptions as $subscription)
                                        <label wire:click="selected('{{ $subscription['_id'] }}')"
                                            class="relative block cursor-pointer rounded-lg border bg-white px-6 py-4 shadow-sm focus:outline-pink-600 hover:border hover:border-pink-600 sm:flex sm:justify-between">
                                            <input type="radio" name="server-size" value="Hobby" class="sr-only"
                                                aria-labelledby="server-size-0-label"
                                                aria-describedby="server-size-0-description-0 server-size-0-description-1">
                                            <span class="flex items-center">
                                                <span class="flex flex-col text-sm">
                                                    <span id="server-size-0-label"
                                                        class="font-medium text-gray-900">{{ $subscription['name'] }}</span>
                                                    <span id="server-size-0-description-0" class="text-gray-500">
                                                        <span
                                                            class="block sm:inline">{{ $subscription['description'] }}</span>

                                                    </span>
                                                </span>
                                            </span>
                                            <span id="server-size-0-description-1"
                                                class="mt-2 flex text-sm sm:mt-0 sm:ml-4 sm:flex-col sm:text-right">
                                                <span class="font-medium text-gray-900">€@if (str_contains($subscription['price'], '.00'))
                                                        {{ round($subscription['price'], 2) }}@else{{ $subscription['price'] }}
                                                    @endif
                                                </span>
                                                <span class="ml-1 text-gray-500 sm:ml-0">
                                                    @if ($subscription['interval'] === 'maand')
                                                        / mo
                                                    @else
                                                        /jaar
                                                    @endif
                                                </span>
                                            </span>

                                            <span class="pointer-events-none absolute -inset-px rounded-lg border-2"
                                                aria-hidden="true"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endif
                    </ul>
                </section>

                <!-- Order summary -->
                <section aria-labelledby="summary-heading" class=" mt-10">
                    <h2 id="summary-heading" class="sr-only">Order summary</h2>

                    <div>
                        <dl class="space-y-4">
                            <div class="flex items-center justify-between">
                                <dt class="text-base font-medium text-gray-900">Total</dt>
                                <dd class="ml-4 text-base font-medium text-gray-900">€{{ $selected['price'] ?? 0.0 }}
                                </dd>
                            </div>
                        </dl>
                        <p class="mt-1 text-sm text-gray-500">This is the price of the concurrent payments</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10">
                        <button type="button" @click="$dispatch('openvoucher')"
                            class="w-full rounded-md border border-transparent bg-pink-100 py-3 px-4 text-base font-medium text-pink-700 shadow-sm hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50">Use discount</button>
                        <button wire:target="next" wire:loading.attr="disabled" type="button" wire:click="next"
                            @if (!$selected) disabled @endif
                            class="
                            @if ($selected) w-full rounded-md border border-transparent bg-pink-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-gray-50 
                            @else 
                            w-full rounded-md border border-transparent bg-gray-300 py-3 px-4 text-base font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-50 @endif">
                            <svg wire:loading wire:target="next" class="animate-spin mx-auto h-6 w-6 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span x-text="step === 2 ? 'Checkout' : 'Next'" wire:loading.remove wire:target="next">

                            </span>
                        </button>
                    </div>
                </section>
            </form>
        </div>
    </div>

    <div @openvoucher.window="open = true" x-data="{ open: false }" class="flex justify-center">

        <!-- Modal -->
        <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog"
            aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
            class="fixed inset-0 z-10 overflow-y-auto">
            <!-- Overlay -->
            <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

            <div x-show="open" x-transition x-on:click="open = false"
                class="relative flex min-h-screen items-center justify-center p-4">
                <div x-on:click.stop x-trap.noscroll.inert="open"
                    class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-4 shadow-lg">
                    <div class="text-center mx-auto h-12 w-12 text-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Discounts</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Gebruik een korting voor je abbonement!</p>
                        </div>
                        <div>
                            <div class="mt-2">
                                <input type="text" wire:model="voucher" name="email" id="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="CODE123">
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                        <button type="button" @click="open = false"
                            class="inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600 sm:col-start-2">Use</button>
                        <button type="button" @click="open = false"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
