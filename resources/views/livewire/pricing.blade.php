<div x-data="{ private: {{ $private ? 'true' : 'false' }}, showTypeSelector: {{ $hideselector ? 'false' : 'true' }}, hideTypeSelector: {{ $hideselector ? 'true' : 'false' }}, nav_step: 0, checkout: false }"
    @setnavstep.window="nav_step = $event.detail.step; setTimeout(() => { window.scrollTo(0,0) }, 150); if(nav_step == 2){ setTimeout(() => { document.getElementById('userLicensePlate').focus() }, 200 ) }"
    @setshowtypeselector.window="showTypeSelector = $event.detail.status"
    @setprivate.window="private = $event.detail.status"
    class="@if ($iframe) @else @endif bg-gray-50 bg-white">
    <div class="@if (!$iframe) py-24 @else py-6 @endif mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">{{ __('Onze abonnementen') }}</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">{{ __('Goedkoop autowassen voor iedereen') }}</p>

            @livewire('products', ['home' => false, 'iframe' => false])
        </div>
    </div>
</div>
