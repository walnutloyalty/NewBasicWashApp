<div x-on:checkout.window="checkout = ''; setTimeout(() => { checkout = true }, 200)"
    x-on:checkout-complete.window="checkout = ''; setTimeout(() => { checkout = true }, 200)" x-data="{ checkout: false }"
    class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    @if (!$home)

        @if (!$iframe)
            <div x-transition x-show="! checkout" class="text-center text-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="mb-6 inline h-12 w-12">
                    <path
                        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                </svg>
            </div>
        @endif
    @endif
    @if (!$iframe)
    @endif
    <div x-transition x-show="! checkout">
        @if (!$home)
            @if (!$iframe)
                <h1 class="text-center text-5xl font-extrabold text-pink-600">{{ __('Webshop') }}</h1>
                <h2 class="mt-6 text-center text-lg">
                    {{ __('Sluit nu je abonnement af en komt direct onbeperkt autowassen!') }}</h2>
            @endif
        @endif
        <div x-data="{ maand: false }" class="sm:align-center sm:flex sm:flex-col">
            @if (!$home)
                <div>
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                        <select id="tabs" name="tabs" x-model="maand"
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                            <option value="1">Maandelijks</option>

                            <option value="0">Jaarlijks</option>

                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <div class="border-b border-gray-200">
                            <nav class="mx-auto -mb-px mt-8 flex space-x-8" aria-label="Tabs">
                                <!-- Current: "border-pink-500 text-pink-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                <a href="#" @click="maand = true"
                                    :class="maand ?
                                        'border-pink-500 text-pink-600 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium' :
                                        'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium'"
                                    aria-current="page">Maandelijks</a>

                                <a href="#" @click="maand = false"
                                    :class="!maand ?
                                        'border-pink-500 text-pink-600 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium' :
                                        'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium'"
                                    aria-current="page">Jaarlijks</a>

                            </nav>
                        </div>
                    </div>
                </div>
            @endif
            <div
                class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-3">
                @foreach ($subscriptions ?? [] as $key => $subscription)
                    @if ($key == 1)
                        <div @if (!$home) @if ($subscription['interval'] === 'maand') x-show="maand" @else x-show="!maand" @endif
                            @endif
                            class="relative overflow-hidden rounded-2xl border-4 border-pink-600 shadow-sm">

                            <div
                                class="text-md absolute top-0 flex h-20 w-full items-center justify-center bg-pink-600 text-center font-bold text-white">
                                <p>#{{ $key + 1 }} {{ $subscription['name'] }}</p>
                            </div>

                            <div class="mt-20 p-8">
                                <div class="flex">
                                    <p class="text-6xl font-black text-gray-700">{{ floor($subscription['price']) }}
                                    </p>
                                    <div class="ml-2 mt-1">
                                        <p class="text-left text-xl font-black text-gray-700">
                                            {{ $subscription['price'][-2] }}{{ $subscription['price'][-1] }}</p>
                                        <span class="text-xl font-bold text-pink-600">per @if ($subscription['interval'] == 'maand') maand
                                            @else
                                                jaar @endif*</span>
                                    </div>
                                </div>
                                <p class="my-8 text-gray-700">{{ $subscription['description'] }}</p>
                                <button wire:click="$emit('checkout', ['z', '{{ $subscription['_id'] }}'])"
                                    class="mb-2 mt-6 block w-full rounded-md border border-pink-600 bg-pink-600 px-4 py-2 text-sm font-semibold text-white hover:border-cyan-600 hover:bg-cyan-600">
                                    {{ __('Afnemen') }}
                                </button>
                            </div>
                        </div>
                    @else
                        <div @if (!$home) @if ($subscription['interval'] === 'maand') x-show="maand" @else x-show="!maand" @endif
                            @endif
                            class="relative overflow-hidden rounded-2xl border-4 border-pink-600 shadow-sm">

                            <div
                                class="text-md absolute top-0 z-50 flex h-20 w-full items-center justify-center bg-pink-600 text-center font-bold text-white">
                                <p>#{{ $key + 1 }} {{ $subscription['name'] }}</p>
                            </div>

                            <div class="mt-20 p-8">
                                <div class="flex">
                                    <p class="text-6xl font-black text-gray-700">{{ floor($subscription['price']) }}
                                    </p>
                                    <div class="ml-2 mt-1">
                                        <p class="text-left text-xl font-black text-gray-700">
                                            {{ $subscription['price'][-2] }}{{ $subscription['price'][-1] }}</p>
                                        <span class="text-xl font-bold text-pink-600">per @if ($subscription['interval'] == 'maand') maand
                                            @else
                                                jaar @endif*</span>
                                    </div>
                                </div>
                                <p class="my-8 text-gray-700">{{ $subscription['description'] }}</p>
                                <button wire:click="$emit('checkout', ['z', '{{ $subscription['_id'] }}'])"
                                    class="mb-2 mt-6 block w-full rounded-md border border-pink-600 bg-pink-600 px-4 py-2 text-sm font-semibold text-white hover:border-cyan-600 hover:bg-cyan-600">
                                    {{ __('Afnemen') }}
                                </button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    @livewire('checkout', ['home' => $home])
</div>
