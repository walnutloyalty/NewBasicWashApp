<x-app-layout>
    <div class="overflow-hidden bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-prose text-base lg:max-w-none">
                <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">My Data</p>
            </div>
            <div class="relative z-10 mx-auto max-w-prose text-base lg:mx-0 lg:max-w-5xl lg:pr-72">
                <h2 class="mb-2 font-semibold">Which personal data have we collected?</h2>
                <p class="text-lg text-gray-500">To give you the optimal usability of our digital card, we require to
                    know a couple things. With Basic Wash your privacy and online safety are in the highest regard. This
                    is why we only require the most basic information about you. This means name, address, phone number,
                    date of birth, e-mail address and if possible, your license plate.</p>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-8">
                <div class="relative z-10">
                    <div class="prose prose-indigo mx-auto text-gray-500 lg:max-w-none">
                        <h2 class="font-semibold text-base">Why do we need your personal data?</h2>
                        <p>Your personal data is kept safe with us to offer the most efficient recognition and
                            reachability when using your digital card. You can also choose, based only on your previous
                            purchases at our store, to receive automated targeted promotions and actions</p>
                    </div>
                    <div class="my-4 max-w-sm">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                   placeholder="you@example.com">
                        </div>
                    </div>
                    <div class="mx-auto mt-10 flex max-w-prose text-base lg:max-w-none">
                        <div class="rounded-md shadow">
                            <a href="#"
                               class="flex w-full items-center justify-center rounded-md border border-transparent bg-pink-600 px-5 py-3 text-base font-medium text-white hover:bg-cyan-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                                Send email</a>
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto mt-12 max-w-prose text-base lg:mt-0 lg:max-w-none">
                    <div class="relative">
                        <div class="px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
                            <img
                                src="{{ asset('media/logos/basic-wash-secondary-logo.png') }}"
                                alt="Workcation" class="w-full h-full rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
