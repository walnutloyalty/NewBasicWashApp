<div  
x-data="{
    stage: 'check',
    breda: false,   
    hellevoetsluis: false,
    terheijden: false,
    ulvenhout: false,
    sintwillebrord: false,
}" 
x-on:breda.window="breda = true"
x-on:hellevoetsluis.window="hellevoetsluis = true"
x-on:terheijden.window="terheijden = true"
x-on:ulvenhout.window="ulvenhout = true"
x-on:sintwillebrord.window="sintwillebrord = true"
x-on:openresults.window="stage = null; setTimeout(() => {stage = 'results'}, 200);"
x-on:openerror.window="stage = null; setTimeout(() => {stage = 'error'}, 200);"
class="bg-white py-16 sm:py-52">
    <div class="relative sm:py-16">
        <div x-transtion x-show="stage === 'check'" class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
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
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{__("Past jouw auto in onze Carwash?")}}</h2>
                        <p class="mx-auto mt-6 max-w-2xl text-lg text-white">{{__("Vul je kenteken in, wij controleren het voor je!")}}
                        </p>
                    </div>
                    <form action="#" class="mt-12 sm:mx-auto sm:flex sm:max-w-lg">
                        <div class="min-w-0 flex-1">
                            <label for="kenteken" class="sr-only">{{__("Kenteken")}}</label>
                            <input id="kenteken" type="text" name="kenteken" wire:model="kenteken"
                                   class="block w-full rounded-md border border-transparent px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-transparent focus:outline-none focus:ring-offset-2 focus:ring-offset-cyan-500"
                                   placeholder="XX123X">
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-3">
                            <button type="button" @click="stage= null; setTimeout(() => {stage = 'loading'}, 200); $wire.check()"
                                    class="block w-full rounded-md border border-transparent bg-cyan-600 px-5 py-3 text-base font-medium text-white shadow hover:bg-pink-600 focus:ring-pink-600 focus:ring-4 focus:outline-none sm:px-10">
                                {{__("Check")}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div x-transition x-show="stage === 'loading'" class="pt-8">
            <h1 class="text-center text-5xl font-extrabold text-pink-600">{{__("Even geduld")}}<h1>
            <h2 class="text-center text-lg mt-6">We valideren je kenteken...</h2>
        </div>

        <div x-transition x-show="stage === 'error'" class="pt-8">
            <h1 class="text-center text-5xl font-extrabold text-pink-600">{{__("Niet gevonden")}}<h1>
            <h2 class="text-center text-lg mt-6">Dit kenteken kunnen we niet vinden, weet je zeker dat het klopt?</h2>
            <button type="button" @click="stage= null; setTimeout(() => {stage = 'check'}, 200); "
                class="block w-52 mx-auto mt-4 rounded-md border border-transparent bg-pink-600 px-5 py-3 text-base font-medium text-white shadow hover:bg-pink-700 focus:ring-pink-600 focus:ring-4 focus:outline-none sm:px-10">
            {{__("Probeer opnieuw")}}
        </button>
        </div>

        <div x-transition x-show="stage === 'results'" class="pt-8">
            <h1 class="text-center mb-2 text-5xl font-extrabold text-pink-600">{{__("Resultaten!")}}<h1>
            <table class="max-w-sm sm:max-w-lg mx-auto  w-full  divide-y divide-gray-300">
                <thead>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Locatie</th>
                    <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Geschikt</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Breda</td>
                    <td x-text="breda ? 'Ja' : 'Nee'" class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">Nee</td>
                  </tr>

                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Hellevoetsluis</td>
                    <td x-text="hellevoetsluis ? 'Ja' : 'Nee'" class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">Nee</td>
                  </tr>

                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Terheijden</td>
                    <td x-text="terheijden ? 'Ja' : 'Nee'" class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">Nee</td>
                  </tr>

                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Ulvenhout</td>
                    <td x-text="ulvenhout ? 'Ja' : 'Nee'" class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">Nee</td>
                  </tr>

                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Sint Willebrord</td>
                    <td x-text="sintwillebrord ? 'Ja' : 'Nee'" class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">Nee</td>
                  </tr>
      
                  <!-- More people... -->
                </tbody>
              </table>
              <button type="button" @click="stage= null; setTimeout(() => {stage = 'check'}, 200); "
                class="block w-52 mx-auto mt-4 rounded-md border border-transparent bg-pink-600 px-5 py-3 text-base font-medium text-white shadow hover:bg-pink-700 focus:ring-pink-600 focus:ring-4 focus:outline-none sm:px-10">
            {{__("Probeer opnieuw")}}
        </button>
        </div>
    </div>
</div>