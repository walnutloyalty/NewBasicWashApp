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

    <div x-show="!showTypeSelector" class="grid max-w-7xl grid-cols-1 gap-x-8 lg:grid-cols-2">
        <div x-show="! checkout">
            <div class="sm:align-center flex flex-col">
                <div class="border-b border-gray-200">
                    <nav class="mx-auto -mb-px flex flex-col sm:flex-row sm:space-x-8" aria-label="Tabs">
                        <a @click="maand = true"
                            class="cursor-pointer whitespace-nowrap px-1 py-4 text-sm font-medium"
                            :class="maand ?
                                'border-pink-500 text-pink-600 border-b-2' :
                                'text-gray-500 hover:border-gray-300 hover:text-gray-700 border-b border-gray-200 hover:border-b-2 sm:border-transparent sm:border-b-2'"
                            aria-current="page">Maandelijkse abonnementen</a>

                        <a @click="maand = false"
                            class="cursor-pointer whitespace-nowrap px-1 py-4 text-sm font-medium"
                            :class="!maand ?
                                'border-pink-500 text-pink-600 border-b-2' :
                                'text-gray-500 hover:border-gray-300 hover:text-gray-700 border-b border-gray-200 hover:border-b-2 sm:border-transparent sm:border-b-2'"
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
