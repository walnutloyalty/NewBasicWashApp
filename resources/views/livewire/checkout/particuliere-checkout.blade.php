<x-app-layout>
    @section('title', 'Checkout')
    <div x-data="{ step: 1 }" @step1.window="step = 1" @step2.window="step = 2" @step3.window="step = 3"
         @step4.window="step = 4"
         class="bg-white">
        @livewireStyles
        <header class="relative border-b border-gray-200 bg-white text-sm font-medium text-gray-700">
            <div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8">
                <div class="relative flex justify-end sm:justify-center">
                    <div aria-label="Progress" class="sm:block">
                        <ol role="list" class="flex space-x-1">
                            <li class="flex items-center">
                                <button type="button" @click="$dispatch('step1')" aria-current="page"
                                        :class="step === 1 && 'text-pink-600'">Abonnement
                                    keuze
                                </button>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <button type="button" @click="$dispatch('step2')"
                                        :class="step === 2 && 'text-pink-600'">Contact
                                    informatie
                                </button>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <button type="button" @click="$dispatch('step3')"
                                        :class="step === 3 && 'text-pink-600'">Kenteken
                                </button>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="ml-4 h-5 w-5 text-gray-300" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <button type="button" @click="$dispatch('step4')"
                                        :class="step === 4 && 'text-pink-600'">Bevestigen
                                </button>
                            </li>
                        </ol>
                    </div>
                    {{--                    <p class="sm:hidden">Step 2 of 4</p>--}}
                </div>
            </div>
        </header>
    </div>
    @livewireScripts
</x-app-layout>
