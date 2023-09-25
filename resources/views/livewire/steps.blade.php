<div class="relative col-span-full flex justify-end border-b border-gray-200 sm:justify-center">
    <div class="flex-1 self-end">
        <button class="whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
            x-show="nav_step > 0 && showTypeSelector === false"
            @click="checkout = false; nav_step = 0;">← Terug</button>
        <button class="whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
            x-show="nav_step == 0 && showTypeSelector === false"
            @click="checkout = false; nav_step = 0; showTypeSelector = true;">← Terug</button>
    </div>
    <div>
        <div aria-label="Progress" class="py-4 sm:block">
            <ol role="list" class="flex space-x-1">
                <li class="flex items-center">
                    <button type="button" @click="checkout = false; nav_step = 0;" aria-current="page"
                        :class="!checkout && 'text-pink-600'">{{ __('Kies abonnement') }}
                    </button>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button type="button" wire:click="$emit('step', 1)" aria-current="page"
                        :class="checkout && nav_step === 1 && 'text-pink-600'">{{ __('Contact informatie') }}
                    </button>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button type="button" wire:click="$emit('step', 2)" :class="checkout && nav_step === 2 && 'text-pink-600'">
                        {{ __('Kenteken') }}
                    </button>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button type="button" wire:click="$emit('step', 3)"
                        :class="checkout && nav_step === 3 && 'text-pink-600'">{{ __('Bevestigen') }}
                    </button>
                </li>
            </ol>
        </div>
    </div>
    <div class="flex-1"></div>
    {{--                    <p class="sm:hidden">Step 2 of 4</p> --}}
</div>
