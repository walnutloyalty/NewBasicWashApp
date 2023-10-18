<div @paymenturl.window="window.open($event.detail.url, '_blank')" class="relative mx-auto">
    <div x-show="checkout" class="grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 xl:gap-x-48" style="display: none;">
        <div x-show="nav_step === 1" style="display: none;">
            <form class="px-4 pt-8 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16" wire:submit.prevent="submit">
                @csrf
                <div class="mx-auto mt-8 max-w-lg lg:max-w-none">
                    <section aria-labelledby="contact-info-heading">
                        <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">
                            {{ __('Contact informatie') }}</h2>
                        <div class="mt-6">
                            <label
                                class="block text-sm font-medium text-gray-700">{{ __('Naam') }}</label>
                            <div class="mt-1">
                                <input type="text" wire:model="name"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                    placeholder="John Doe">
                                @error('name')
                                    <span class="text-sm text-pink-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <label
                                class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <div class="mt-1">
                                <input type="email" wire:model="email"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                    placeholder="my@email.com">
                                @error('email')
                                    <span class="text-sm text-pink-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </section>

                    <section aria-labelledby="shipping-heading" class="mt-8">
                        <h2 id="shipping-heading"
                            class="text-lg font-medium text-gray-900">
                            @if ($type == 'zakelijk')
                                Bedrijfsinformatie
                            @else
                                Overige informatie
                            @endif
                        </h2>
                        <div class="mt-4 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label
                                    class="block text-sm font-medium text-gray-700">{{ __('Telefoonnummer') }}</label>
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
                                <label
                                    class="block text-sm font-medium text-gray-700">{{ __('Postcode') }}</label>
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
                                <label
                                    class="block text-sm font-medium text-gray-700">{{ __('Huisnummer') }}</label>
                                <div class="mt-1">
                                    <input type="text" wire:model="house_number"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                        placeholder="123A">
                                    @error('house_number')
                                        <span class="text-sm text-pink-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if ($selected['zakelijk'] ?? false)
                                <div class="sm:col-span-2">
                                    <label
                                        class="block text-sm font-medium text-gray-700">{{ __('Tenaamstelling bedrijf') }}</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="company_name"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="Basic Wash B.V.">
                                        @error('company_name')
                                            <span class="text-sm text-pink-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700">{{ __('BTW nummer') }}</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="company_btw_number"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="NL123456789B01">
                                        @error('company_btw_number')
                                            <span class="text-sm text-pink-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700">{{ __('KVK nummer') }}</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="company_kvk_number"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm"
                                            placeholder="12345678">
                                        @error('company_kvk_number')
                                            <span class="text-sm text-pink-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                </div>

            </form>
        </div>
        <div x-show="nav_step === 2" style="display: none;">
            <div class="mx-auto mt-4 max-w-lg">
                <div>
                    <div class="mt-16 text-center">

                        <h2 class="mt-2 text-lg font-medium text-gray-900">{{ __('Voeg je kenteken toe') }}</h2>
                    </div>
                    <form action="#" class="mt-6 flex">
                        <label class="sr-only">{{ __('Kenteken') }}</label>
                        <input type="text" name="userLicensePlate" wire:model="licenseplate" id="userLicensePlate"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                            placeholder="Enter a licenseplate">
                        <button type="button" wire:click="addLicensePlate" wire:loading.attr="disabled"
                            wire:target="addLicensePlate"
                            class="ml-4 flex-shrink-0 rounded-full border border-transparent bg-pink-600 p-2 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                            <svg wire:target="addLicensePlate" wire:loading.remove xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>

                            <svg wire:loading wire:target="addLicensePlate"
                                class="mx-auto h-6 w-6 animate-spin text-white" xmlns="http://www.w3.org/2000/svg"
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
                        <span class="text-sm text-pink-600"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="mt-10">
                    <h3 class="text-sm font-medium text-gray-500">{{ __('Je toegevoegde kenteken') }}</h3>
                    <ul role="list" class="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">
                        @foreach ($licenseplates as $key => $plate)
                            <li
                                class="relative bg-white px-4 py-5 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 hover:bg-gray-50">
                                <div class="flex w-full justify-between">
                                    <p class="truncate text-sm font-medium text-gray-900">{{ $plate }}</p>
                                    <p wire:click="removePlate({{ $key }})"
                                        class="cursor-pointer truncate text-sm text-pink-600">{{ __('Verwijder') }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @error('licenseplates')
                        <span class="text-sm text-pink-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div x-show="nav_step === 3" class="pt-16" style="display: none;">
            <h1 class="text-center text-5xl font-extrabold text-pink-600">{{ __('Even geduld') }}</h1>
            <h2 class="mt-6 text-center text-lg">{{ $loading_message }}</h2>
            @if (!empty($paymentUrl))
                <h3 class="mt-6 text-center text-base underline hover:decoration-dotted"><a href="{{ $paymentUrl }}" target="_blank">Is er geen nieuw venster geopend? Klik dan hier</a></h3>

            @endif
        </div>

        <div x-show="nav_step === null" class="pt-16" style="display: none;">
            <h1 class="text-center text-5xl font-extrabold text-pink-600">{{ __('Even geduld') }}</h1>
            <h2 class="mt-6 text-center text-lg">{{ __('Gegevens worden geverifieerd...') }}</h2>
        </div>
        <style>
            /* if the page is smaller than sm */
            @media (min-width: 1024px) {
                .cart {
                    max-width: 450px;
                }
            }
        </style>
        <div style="width:100%; " class="cart @if (!$home) bg-white @endif mr-4 lg:absolute lg:right-0">
            <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-0">
                <form class="mt-12 py-1">
                    <section aria-labelledby="cart-heading">
                        <h2 id="cart-heading" class="sr-only"></h2>

                        <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">

                            <li class="grid grid-cols-2 gap-1 py-6 sm:grid-cols-3">
                                <div class="flex-shrink-0">
                                    <img src="{{ $selected['image'] ?? '' }}"
                                        alt="Front side of mint cotton t-shirt with wavey lines pattern."
                                        class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                                </div>

                                <div class="col-span-2 flex flex-1 flex-col">
                                    <div>
                                        <h4 class="font-medium text-gray-700 hover:text-gray-800">{{ $selected['name'] ?? '' }}</h4>
                                        <p class="mt-1 text-sm text-gray-500">{{ $selected['description'] ?? '' }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <!-- Order summary -->
                    <section aria-labelledby="summary-heading" class="mt-10">
                        <h2 id="summary-heading" class="sr-only">Order summary</h2>
                        <div>
                            <p class="mt-1 text-sm text-blue-500" wire:loading wire:target="applyVoucher">{{ __('Kortingscode wordt gecontroleerd...') }}</p>
                            @if ($applyVoucherFailed)
                                <div wire:loading.class='hidden' wire:target="applyVoucher">
                                    <button type='button' class="mt-1 inline-block cursor-pointer text-sm text-red-600 hover:text-red-800" wire:click="$set('applyVoucherFailed', false)">X</button>
                                    <p class="mt-1 inline-block text-sm text-red-500">{{ __('Kortingscode ongeldig') }}</p>
                                </div>
                            @endif
                            @if ($voucherApplied || count($licenseplates) >= 2)
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{ __('Product prijs') }}
                                            @if (count($licenseplates) >= 2)
                                                {{ __('per kenteken') }}
                                            @endif
                                        </dt>
                                        <dd class="ml-4 text-sm font-medium text-gray-500">
                                            €{{ $selected['price'] ?? '' }}
                                            @if (count($licenseplates) >= 2)
                                                x {{ count($licenseplates) }}
                                            @endif
                                        </dd>
                                    </div>
                                </dl>
                            @endif
                            @if ($voucherApplied)
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm font-medium text-gray-500">{{ __('Kortingscode') }}</dt>
                                        <dd class="ml-4 text-sm font-medium text-gray-500">- €{{ number_format($voucherAmount ?? 0.0, 2, ',', '') }}</dd>
                                    </div>
                                </dl>
                            @endif
                            @if (($selected['zakelijk'] ?? false) && ($selected['btw'] ?? -1) != -1)
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm font-medium text-gray-500">{{ __('Totaal') }}</dt>
                                        <dd class="ml-4 text-sm font-medium text-gray-500">
                                            @if ($voucherApplied)
                                                Eerste {{ $selected['interval'] }} €{{ $discountedPrice }}
                                            @else
                                                €{{ $discountedPrice }} per {{ $selected['interval'] }}
                                            @endif
                                        </dd>
                                    </div>
                                </dl>
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm text-gray-500">{{ __('Waarvan ' . $btwPercentage . '% btw') }}</dt>
                                        <dd class="ml-4 text-sm text-gray-500">€{{ $voucherApplied ? $discountedBtwPrice : $baseBtwPrice }}</dd>
                                    </div>
                                </dl>
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-base text-gray-900">{{ __('Totaal exclusief ' . $btwPercentage . '% btw') }}</dt>
                                        @if ($voucherApplied)
                                            <dd class="ml-4 text-base text-gray-900">Eerste {{ $selected['interval'] ?? '' }} €{{ $discountedExBtwPrice }}</dd>
                                        @else
                                            <dd class="ml-4 text-base text-gray-900">€{{ $baseExBtwPrice }} per {{ $selected['interval'] ?? '' }}</dd>
                                        @endif
                                    </div>
                                </dl>
                            @else
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-base font-medium text-gray-900">{{ __('Totaal') }}</dt>
                                        @if ($voucherApplied)
                                            <dd class="ml-4 text-base font-medium text-gray-900">Eerste {{ $selected['interval'] ?? '' }} €{{ $discountedPrice }}</dd>
                                        @else
                                            <dd class="ml-4 text-base font-medium text-gray-900">€{{ $basePrice }} per {{ $selected['interval'] ?? '' }}</dd>
                                        @endif
                                    </div>
                                </dl>
                            @endif

                            @if ($voucherApplied)
                                @if ($selected['zakelijk'] && $selected['btw'] != -1)
                                    <dl class="mt-4 space-y-4">
                                        <div class="flex items-center justify-between">
                                            <dt class="text-base text-gray-600"></dt>
                                            <dd class="ml-4 text-base text-gray-600">Daarna €{{ $baseExBtwPrice }} per {{ $selected['interval'] ?? '' }}</dd>
                                        </div>
                                    </dl>
                                    <dl class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <dt class="text-sm font-medium text-gray-600"></dt>
                                            <dd class="ml-4 text-sm font-medium text-gray-600">{{ __('Inclusief ' . $btwPercentage . '% btw') }}: €{{ $basePrice }} per {{ $selected['interval'] ?? '' }}</dd>
                                        </div>
                                    </dl>
                                @else
                                    <dl class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <dt class="text-base font-medium text-gray-600"></dt>
                                            <dd class="ml-4 text-base font-medium text-gray-600">Daarna €{{ $basePrice }} per {{ $selected['interval'] ?? '' }}</dd>
                                        </div>
                                    </dl>
                                @endif

                            @endif
                            {{-- <p class="mt-1 text-sm text-gray-500">{{ __('De hoeveelheid van de periodieke betalingen') }}</p> --}}
                        </div>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="flex flex-grow flex-col">
                                <span class="text-sm font-medium leading-6 text-gray-900"
                                    id="availability-label">Voorwaarden</span>
                                <span class="text-sm text-gray-500" id="availability-description">Door verder te gaan,
                                    accepteer ik de <a class="text-blue-600 underline" href="https://www.basicwash.nl/algemene-voorwaarden/" target="_blank">algemene voorwaarden</a> en <a class="text-blue-600 underline" href="https://www.basicwash.nl/algemene-voorwaarden/" target="_blank">privacybeleid</a> van BasicWash</span>
                            </span>
                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                            <button wire:click="toggleTop" type="button"
                                class="@if ($tos) bg-pink-600 @else bg-gray-200 @endif relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
                                role="switch" aria-checked="false" aria-labelledby="availability-label"
                                aria-describedby="availability-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="@if ($tos) translate-x-5 @else translate-x-0 @endif pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>

                        <div class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <button type="button" @click="$dispatch('openvoucher')"
                                class="w-full rounded-md border border-transparent bg-pink-100 px-4 py-3 text-base font-medium text-pink-700 shadow-sm hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                {{ __('Gebruik korting') }}
                            </button>
                            <button wire:target="next" wire:loading.attr="disabled" type="button" wire:click="next"
                                @if (!$selected) disabled @endif
                                @if (!$tos) disabled @endif
                                @if ($selected) class="w-full rounded-md border border-transparent  py-3 px-4 text-base font-medium text-white shadow-sm @if ($tos) hover:bg-pink-700 bg-pink-600 @else hover:bg-pink-500 bg-pink-400 @endif focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-gray-50"
                            @else
                                class="w-full rounded-md border border-transparent bg-gray-300 px-4 py-3 text-base font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-50"
                                @endif
                                >
                                <svg wire:loading wire:target="next" class="mx-auto h-6 w-6 animate-spin text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                <span x-text="nav_step === 2 ? 'Checkout' : 'Next'" wire:loading.remove wire:target="next">

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
                <div x-show="open" style="display: none;" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

                <div x-show="open" style="display: none;" x-transition x-on:click="open = false"
                    class="relative flex min-h-screen items-center justify-center p-4">
                    <div x-on:click.stop x-trap.noscroll.inert="open"
                        class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-4 shadow-lg">
                        <div class="mx-auto h-12 w-12 text-center text-pink-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                {{ __('Kortings code') }}</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">{{ __('Gebruik een korting voor je abbonement!') }}</p>
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
                            <button type="button" @click="open = false" wire:click="applyVoucher"
                                class="inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600 sm:col-start-2">{{ __('Gebruik') }}</button>
                            <button type="button" @click="open = false"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0">{{ __('Terug') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
