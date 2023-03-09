@section('title', 'Contact')
<div class="bg-white mb-32">
    <header class="relative bg-blue-gray-800 pb-36">
        <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="{{ asset('media/images/basic-wash-pros-2.jpeg') }}"
                 alt="Basic Wash">
            <div class="absolute inset-0 bg-blue-gray-500 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative">
            <div class="flex flex-1 items-center">
            </div>
        </div>
        <div class="relative mx-auto mt-24 max-w-md px-4 pb-32 sm:max-w-3xl sm:px-6 md:mt-32 lg:max-w-7xl lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl text-center">{{__("Contact")}}</h1>
            <p class="mt-6 text-xl text-blue-gray-300 text-center">{{__("Neem direct persoonlijk contact met ons op!")}}</p>
        </div>
    </header>
    <main>
        <div class="bg-blue-gray-50">
            <!-- Cards -->
            <section class="relative mx-auto -mt-32 max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8"
                     aria-labelledby="contact-heading">
                <h2 class="sr-only" id="contact-heading">Contact us</h2>
                <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                    <div class="flex flex-col rounded-2xl bg-white shadow-xl">
                        <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                            <div
                                class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-pink-600 p-5 shadow-lg text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-blue-gray-900">{{__("Basic Wash - Facebook")}}</h3>
                            <p class="mt-4 text-base text-blue-gray-500">{{__("Stuur ons een bericht via Messenger! Houdt ons kanaal op Facebook goed in de gaten voor de laatste 'nieuwtjes' en actuele aanbiedingen.")}}</p>
                        </div>
                        <div class="rounded-bl-2xl rounded-br-2xl bg-blue-gray-50 p-6 md:px-8">
                            <a href="https://m.me/Basic%20Wash" target="_blank"
                               class="text-base font-medium text-pink-600 hover:text-cyan-600">
                                {{__("Stuur een bericht")}}
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-2xl bg-white shadow-xl">
                        <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                            <div
                                class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-pink-600 p-5 shadow-lg text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-blue-gray-900">{{__("Basic Wash - Mail")}}</h3>
                            <p class="mt-4 text-base text-blue-gray-500">{{__("Mail ons jouw vraag!")}}</p>
                        </div>
                        <div class="rounded-bl-2xl rounded-br-2xl bg-blue-gray-50 p-6 md:px-8">
                            <a href="mailto:info@basicwash.nl?SUBJECT=Contact"
                               class="text-base font-medium text-pink-600 hover:text-cyan-600">
                                {{__("Stuur een mail")}}
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-2xl bg-white shadow-xl">
                        <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                            <div
                                class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-pink-600 p-5 shadow-lg">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-blue-gray-900">{{__("Basic Wash - 0180 643 643")}}</h3>
                            <p class="mt-4 text-base text-blue-gray-500">{{__("Bel ons voor jouw dringende vragen! Onze klantenservice zit klaar om je te woord te staan.")}}</p>
                        </div>
                        <div class="rounded-bl-2xl rounded-br-2xl bg-blue-gray-50 p-6 md:px-8">
                            <a href="tel:018643643" class="text-base font-medium text-pink-600 hover:text-cyan-600">
                                {{__("Bel ons")}}
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
