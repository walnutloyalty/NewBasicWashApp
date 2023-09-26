<div x-data="{ maand: false }"
    @checkout.window="checkout = true"
    @checkout-complete.window="checkout = true"
    class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
    @livewire('steps', key('type-selector'))
    <div>
        @livewire('checkout', ['home' => true])
    </div>

    <div x-show="!checkout">
        @livewire('type-selector', key('type-selector'))
    </div>

    {{-- @if (!$home)
        @if (!$iframe)
            <div x-transition x-show="! checkout" class="text-center text-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="mb-6 inline h-12 w-12">
                    <path
                        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                </svg>
            </div>
        @endif
    @endif --}}

    <div x-show="!showTypeSelector" class="grid max-w-7xl grid-cols-1 gap-x-8 lg:grid-cols-2">
        <div x-show="! checkout">
            {{-- @if (!$home)
                @if (!$iframe)
                    <h1 class="text-center text-5xl font-extrabold text-pink-600">{{ __('Webshop') }}</h1>
                    <h2 class="mt-6 text-center text-lg">
                        {{ __('Sluit nu je abonnement af en komt direct onbeperkt autowassen!') }}</h2>
                @endif
            @endif --}}

            <div class="sm:align-center sm:flex sm:flex-col">
                <div class="border-b border-gray-200">
                    <nav class="mx-auto -mb-px flex space-x-8" aria-label="Tabs">
                        <!-- Current: "border-pink-500 text-pink-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a href="#" @click="maand = true"
                            :class="maand ?
                                'border-pink-500 text-pink-600 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium'"
                            aria-current="page">Maandelijkse abonnementen</a>

                        <a href="#" @click="maand = false"
                            :class="!maand ?
                                'border-pink-500 text-pink-600 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium'"
                            aria-current="page">Jaarlijkse abonnementen</a>
                    </nav>
                </div>

                <div class="mt-12 grid-cols-2 space-y-4 sm:grid sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none">
                    @foreach ($privateSubscriptions ?? [] as $key => $subscription)
                        @livewire('product', ['subscription' => $subscription, 'key' => $key, 'isBusiness' => false, 'home' => $home])
                    @endforeach
                    @foreach ($businessSubscriptions ?? [] as $key => $subscription)
                        @livewire('product', ['subscription' => $subscription, 'key' => $key, 'isBusiness' => true, 'home' => $home])
                    @endforeach
                </div>
            </div>
        </div>
        <div x-show="checkout === false">
            @livewire('subscription-info-placeholder')
        </div>
    </div>
</div>
