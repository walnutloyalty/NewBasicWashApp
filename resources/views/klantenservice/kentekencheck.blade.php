<x-app-layout>
    @section('title', 'Kentekencheck')

    <div class="bg-white py-16 sm:py-52">
        <div class="relative sm:py-16">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="relative overflow-hidden rounded-2xl bg-pink-600 px-6 py-10 shadow-xl sm:px-12 sm:py-20">
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                        <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-indigo-500 text-opacity-40" fill="currentColor"
                                  d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"/>
                            <path class="text-indigo-700 text-opacity-40" fill="currentColor"
                                  d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"/>
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="sm:text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Past jouw auto in onze
                                Carwash?</h2>
                            <p class="mx-auto mt-6 max-w-2xl text-lg text-white">Vul je kenteken in, wij controleren
                                het voor je!
                            </p>
                        </div>
                        <form action="#" class="mt-12 sm:mx-auto sm:flex sm:max-w-lg">
                            <div class="min-w-0 flex-1">
                                <label for="kenteken" class="sr-only">Kenteken</label>
                                <input id="kenteken" type="text" name="kenteken"
                                       class="block w-full rounded-md border border-transparent px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-transparent focus:outline-none focus:ring-offset-2 focus:ring-offset-cyan-500"
                                       placeholder="XX123X">
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-3">
                                <button type="submit"
                                        class="block w-full rounded-md border border-transparent bg-cyan-600 px-5 py-3 text-base font-medium text-white shadow hover:bg-pink-600 sm:px-10">
                                    Check
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
