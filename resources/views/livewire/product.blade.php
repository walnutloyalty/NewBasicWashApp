<div x-show="private === {{ $isBusiness ? 'false' : 'true' }}">
    @if ($key == 1)
        <div @if (!$home) @if ($subscription['interval'] === 'maand') x-show="maand" @else x-show="!maand" @endif
            @endif
            class="relative overflow-hidden rounded-2xl border-4 border-pink-600 shadow-sm">

            <div
                class="text-md absolute top-0 flex h-20 w-full items-center justify-center bg-pink-600 text-center font-bold text-white">
                <p>#{{ $key + 1 }} {{ $subscription['name'] }}</p>
            </div>
            @if (!$isBusiness)
                <div
                    class="absolute right-24 top-8 w-full -translate-y-1/2 translate-x-1/2 transform px-12 shadow sm:right-32 sm:top-10">
                    <div
                        class="absolute right-0 top-0 z-50 rotate-45 transform bg-blue-500 px-12 py-1 text-sm font-bold text-white">
                        Meest gekozen
                    </div>
                </div>
            @endif

            <div class="mt-20 p-8">
                <div class="flex">
                    <p class="text-6xl font-black text-gray-700">{{ floor($subscription['price']) }}
                    </p>
                    <div class="ml-2 mt-1">
                        <p class="text-left text-xl font-black text-gray-700">
                            {{ $subscription['price'][-2] }}{{ $subscription['price'][-1] }}</p>
                        <span class="text-xl font-bold text-pink-600">per @if ($subscription['interval'] == 'maand') maand
                            @else
                                jaar @endif
                        </span>
                    </div>
                </div>
                <p class="my-8 text-gray-700">{{ $subscription['description'] }}</p>
                <button wire:click="$emit('checkout', ['{{ $isBusiness ? 'z' : 'p' }}', '{{ $subscription['_id'] }}'])"
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
                                jaar @endif
                        </span>
                    </div>
                </div>
                <p class="my-8 text-gray-700">{{ $subscription['description'] }}</p>
                <button wire:click="$emit('checkout', ['{{ $isBusiness ? 'z' : 'p' }}', '{{ $subscription['_id'] }}'])"
                    class="mb-2 mt-6 block w-full rounded-md border border-pink-600 bg-pink-600 px-4 py-2 text-sm font-semibold text-white hover:border-cyan-600 hover:bg-cyan-600">
                    {{ __('Afnemen') }}
                </button>
            </div>
        </div>
    @endif

</div>
