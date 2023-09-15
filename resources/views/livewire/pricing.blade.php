<div x-data="{ private: true }" class="@if ($iframe) bg-white @else bg-gray-50 @endif">
    <div class="@if (!$iframe) py-24 @else py-6 @endif mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">{{ __('Onze abonnementen') }}</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">{{ __('Goedkoop autowassen voor iedereen') }}</p>
            @if (!$hasSelectedType)
                {{-- <button type="button" wire:click="switchPrivate(true)"
                    class="@if ($private) bg-cyan-600 @else bg-pink-600 @endif relative w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                    {{ __('Persoonlijk') }}
                </button>
                <button type="button" wire:click="switchPrivate(false)"
                    class="@if (!$private) bg-cyan-600 @else bg-pink-600 @endif relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                    {{ __('Zakelijk') }}
                </button> --}}
                <div class="mt-20 divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
                    <div wire:click="switchPrivate(true)" class="group relative rounded-tl-lg rounded-tr-lg bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 sm:rounded-tr-none">
                        <div>
                            <span class="inline-flex rounded-lg bg-teal-50 p-3 text-teal-700 ring-4 ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-base font-semibold leading-6 text-gray-900">
                                <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Particulieren abonnementen
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">Zie hier de optie voor particulieren abonnementen</p>
                        </div>
                        <span class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                            </svg>
                        </span>
                    </div>
                    <div wire:click="switchPrivate(false)" class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 sm:rounded-tr-lg">
                        <div>
                            <span class="inline-flex rounded-lg bg-purple-50 p-3 text-purple-700 ring-4 ring-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>

                            </span>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-base font-semibold leading-6 text-gray-900">
                                <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Zakelijke abonnementen
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">Zie hier de opties voor zakelijke abonnementen</p>
                        </div>
                        <span class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                            </svg>
                        </span>
                    </div>
                </div>
            @else
                {{-- <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
                    <button type="button" wire:click="switchPrivate(true)"
                        class="@if ($private) bg-cyan-600 @else bg-pink-600 @endif relative w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                        {{ __('Persoonlijk') }}
                    </button>
                    <button type="button" wire:click="switchPrivate(false)"
                        class="@if (!$private) bg-cyan-600 @else bg-pink-600 @endif relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border-pink-200 py-2 text-sm font-medium text-white hover:bg-cyan-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8">
                        {{ __('Zakelijk') }}
                    </button>
                </div> --}}
                @if ($private)
                    @livewire('particulier', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false], key("particulier-$refreshid"))
                @else
                    @livewire('zakelijk', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false], key("zakelijk-$refreshid"))
                @endif
            @endif
        </div>
    </div>
</div>
