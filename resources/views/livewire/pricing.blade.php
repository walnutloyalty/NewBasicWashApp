<div x-data="{ private: true }" class="@if($iframe) bg-white @else bg-gray-50 @endif">
    <div class="mx-auto max-w-7xl @if(! $iframe) py-24 @else py-6 @endif px-4 sm:px-6 lg:px-8">
        <div class="sm:align-center sm:flex sm:flex-col">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">{{__("Onze abonnementen")}}</h1>
            <p class="mt-5 text-xl text-gray-500 sm:text-center">{{__("Goedkoop autowassen voor iedereen")}}
            </p>
            <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
                <button type="button" wire:click="$set('private', true)"
                    class="relative w-1/2 whitespace-nowrap rounded-md border-pink-200 @if($private) bg-cyan-600 @else bg-pink-600 @endif py-2 text-sm font-medium text-white shadow-sm focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8 hover:bg-cyan-600">
                    {{__("Persoonlijk")}}
                </button>
                <button type="button" wire:click="$set('private', false)" 
                    class="relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border-pink-200 @if(! $private) bg-cyan-600 @else bg-pink-600 @endif py-2 text-sm font-medium text-white focus:z-10 focus:outline-none focus:ring-2 focus:ring-cyan-500 sm:w-auto sm:px-8 hover:bg-cyan-600">
                    {{__("Zakelijk")}}
                </button>
            </div>
            @if($private)
                @livewire('particulier', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false])
            @else
                @livewire('zakelijk', ['home' => $pricing ?? true, 'iframe' => $iframe ?? false])
            @endif
        </div>
    </div>
</div>
