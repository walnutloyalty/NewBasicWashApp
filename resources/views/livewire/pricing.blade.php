<div x-data="{ private: true, showTypeSelector: true, nav_step: 0, checkout: false }"
    @setnavstep.window="console.log('123'); nav_step = $event.detail.step; console.log('navstep: ', nav_step, typeof nav_step, $event.detail.step)"
    @setshowtypeselector.window="showTypeSelector = $event.detail.status"
    @setprivate.window="private = $event.detail.status"
    class="@if ($iframe) bg-white @else bg-gray-50 @endif">
    <div class="@if (!$iframe) py-24 @else py-6 @endif mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">{{ __('Onze abonnementen') }}</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">{{ __('Goedkoop autowassen voor iedereen') }}</p>

            @livewire('products', ['home' => true, 'iframe' => false])
        </div>
    </div>
</div>
