<x-app-layout>
    <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-12 h-12 inline mt-24 mb-8 text-pink-600">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
        </svg>
    </div>
    <form class="space-y-8 divide-y divide-gray-200 lg:mx-96 mb-24">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div class="text-center">
                    <h3 class="text-3xl font-extrabold leading-6 text-pink-600">Invulformulier</h3>
                    <p class="mt-4 text-lg text-black">Gebruik onderstaand formulier om zo gericht mogelijk antwoord te krijgen op je vraag!</p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="naam" class="block text-sm font-medium text-gray-700">Naam</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="naam" id="naam" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm" required>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="email" name="email" id="email" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm" placeholder="you@example.com" required>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="telefoon" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="telefoon" id="telefoon" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm" required>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="kenteken" class="block text-sm font-medium text-gray-700">Kenteken</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="kenteken" id="kenteken" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm" required>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="onderwerp" class="block text-sm font-medium text-gray-700">Onderwerp</label>
                        <div class="mt-1">
                            <select id="onderwerp" name="onderwerp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm">
                                <option>Abonnement informatie - Carwash</option>
                                <option>Wijziging gegevens - Carwash</option>
                                <option>Betalingen - Carwash</option>
                                <option>Schade, verlies of diefstal - Carwash</option>
                                <option>Zakelijk - Carwash</option>
                                <option>Overig - Carwash</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="omschrijving" class="block text-sm font-medium text-gray-700">Omschrijving</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="omschrijving" id="omschrijving" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm" required>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-600">Save</button>
            </div>
        </div>
    </form>

</x-app-layout>
