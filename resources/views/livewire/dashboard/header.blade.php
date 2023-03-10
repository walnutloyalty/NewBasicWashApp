<div x-data="{ mobile: false }" class="relative bg-pink-600">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">Basic wash</span>
                    <img class="h-8 w-auto sm:h-14"
                         src="{{ asset('media/logos/basic-wash-logo.png') }}" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button" @click="mobile = true"
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <button type="button" wire:click=""
                        class="group text-white transition-all duration-300 ease-in-out inline-flex items-center"
                        aria-expanded="false">
                    <span
                        class="bg-left-bottom bg-gradient-to-r from-cyan-500 to-cyan-500 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold text-2xl group-hover:text-cyan-500">{{__("Producten")}}</span>
                    
                </button>

                <button type="button" wire:click=""
                        class="group text-white transition-all duration-300 ease-in-out inline-flex items-center"
                        aria-expanded="false">
                    <span
                        class="bg-left-bottom bg-gradient-to-r from-cyan-500 to-cyan-500 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold text-2xl group-hover:text-cyan-500">{{__("Orders")}}</span>
                </button>
            </nav>
        </div>
    </div>
    <div x-show="mobile" x-data="{ mobileSub1: false, mobileSub2: false, mobileSub3: false }"
         class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden z-50">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('media/logos/basic-wash-logo.png') }}"
                             alt="Basic Wash">
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="mobile = false"
                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub1 = true; mobileSub2 = false; mobileSub3 = false"
                           :class="mobileSub1 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">{{__("Webshop")}}</span>
                        </a>
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub2 = true; mobileSub1 = false; mobileSub3 = false"
                           :class="mobileSub2 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">{{__("Locaties")}}</span>
                        </a>
                        <a href="#" class="-m-3 flex items-center rounded-md p-3"
                           @click="mobileSub3 = true; mobileSub1 = false; mobileSub2 = false"
                           :class="mobileSub3 ? 'bg-pink-100' : ''">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 flex-shrink-0 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">{{__("Klantenservice")}}</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
