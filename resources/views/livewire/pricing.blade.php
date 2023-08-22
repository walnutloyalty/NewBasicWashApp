<div x-data="{ private: true }" class="@if ($iframe) bg-white @else bg-gray-50 @endif">
    <div class="@if (!$iframe) py-24 @else py-6 @endif mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">{{ __('Onze abonnementen') }}</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">{{ __('Goedkoop autowassen voor iedereen') }}</p>
            <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
                <button type="button" wire:click="switchPrivate(true)"
                    class="@if ($private) bg-cyan-600 @else bg-pink-600 @endif relative w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                    {{ __('Persoonlijk') }}
                </button>
                <button type="button" wire:click="switchPrivate(false)"
                    class="@if (!$private) bg-cyan-600 @else bg-pink-600 @endif relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                    {{ __('Zakelijk') }}
                </button>
            </div>
            @if ($private)
                @livewire('particulier', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false], key("particulier-$refreshid"))
            @else
                @livewire('zakelijk', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false], key("zakelijk-$refreshid"))
            @endif
        </div>
    </div>
</div>
