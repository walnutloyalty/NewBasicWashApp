<x-app-layout>
    <div class="bg-gray-50">

        <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">

            <h2 class="sr-only">Checkout</h2>
            <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                <div>
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4">
                        <label for="telefoonnummer"
                               class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                        <div class="mt-1">
                            <input id="telefoonnummer" name="telefoonnummer" type="tel"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4 max-w-[5rem]">
                        <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
                        <div class="mt-1">
                            <input id="postcode" name="postcode" type="text"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-4 max-w-[5rem]">
                        <label for="huisnummer" class="block text-sm font-medium text-gray-700">Huisnummer</label>
                        <div class="mt-1">
                            <input id="huisnummer" name="huisnummer" type="text"
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                        </div>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-lg font-medium text-gray-900">Kenteken</h2>
                        <div class="mt-4">
                            <label for="kenteken" class="block text-sm font-medium text-gray-700">Uw lidmaatschap geldt
                                voor dit kenteken</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-blue-600 px-3 text-gray-500 sm:text-sm pt-4 text-white">NL</span>
                                    <input type="text" name="kenteken" id="kenteken" placeholder="AB12345"
                                           class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"><a href="{{ route('particuliere-checkout-step2') }}"
                            class="w-full rounded-md border border-transparent bg-pink-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-gray-50">Volgende
                            stap</a></div>
                </div>


                <!-- Order summary -->
                <div class="mt-10 lg:mt-0">
                    <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="flex py-6 px-4 sm:px-6">
                                <div class="flex-shrink-0">
                                    <h2 class="text-xl font-bold text-gray-900">Je mandje</h2>
                                </div>
                            </li>
                            <!-- More products... -->
                        </ul>
                        <dl class="space-y-6 border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Subtotal</dt>
                                <dd class="text-sm font-medium text-gray-900">$64.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Shipping</dt>
                                <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Taxes</dt>
                                <dd class="text-sm font-medium text-gray-900">$5.52</dd>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                <dt class="text-base font-medium">Total</dt>
                                <dd class="text-base font-medium text-gray-900">$75.52</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
