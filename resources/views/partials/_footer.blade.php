<footer class="bg-pink-600" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <img class="h-10" src="{{ asset('media/logos/basic-wash-logo.png') }}"
                     alt="Basic Wash">
                <div>
                    <a href="{{ route('algemene-voorwaarden') }}"><p
                            class="text-base text-white font-extrabold hover:underline cursor-pointer">Algemene
                            voorwaarden</p></a>
                    <a href="{{ route('abonnements-voorwaarden') }}"><p
                            class="text-base text-white font-extrabold hover:underline cursor-pointer">Abonnements
                            voorwaarden</p></a>
                </div>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/basicwashnl" target="_blank" class="text-white">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/basicwashnl/" class="text-white" target="_blank">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-extrabold text-white">Webshop</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('particulier') }}" class="text-base text-white hover:underline">Particulier</a>
                            </li>
                            <li>
                                <a href="{{ route('zakelijk') }}" class="text-base text-white hover:underline">Zakelijk
                                    wassen</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-extrabold text-white">Locaties</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('breda') }}" class="text-base text-white hover:underline">Minervum
                                    7001-C, 4817 ZJ
                                    Breda</a>
                            </li>
                            <li>
                                <a href="{{ route('hellevoetsluis') }}" class="text-base text-white hover:underline">Rijksstraatweg
                                    65, 3222 KB
                                    Hellevoetsluis</a>
                            </li>
                            <li>
                                <a href="{{ route('sint-willebrord') }}" class="text-base text-white hover:underline">Poppestraat
                                    130, 4711 EZ Sint
                                    Willebrord</a>
                            </li>
                            <li>
                                <a href="{{ route('terheijden') }}" class="text-base text-white hover:underline">Zeggelaan
                                    200, 4844 SK
                                    Terheijden</a>
                            </li>
                            <li>
                                <a href="{{ route('ulvenhout') }}" class="text-base text-white hover:underline">Molenstraat
                                    1A, Ulvenhout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-extrabold text-white">Klantenservice</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('klantenportaal') }}" class="text-base text-white hover:underline">Klantenportaal</a>
                            </li>
                            <li>
                                <a href="{{ route('kentekencheck') }}" class="text-base text-white hover:underline">Kentekencheck</a>
                            </li>
                            <li>
                                <a href="{{ route('FAQ') }}" class="text-base text-white hover:underline">F.A.Q.</a>
                            </li>
                            <li>
                                <a href="{{ route('invulformulier') }}" class="text-base text-white hover:underline">Invulformulier</a>
                            </li>
                            <li>
                                <a href="{{ route('over-ons') }}" class="text-base text-white hover:underline">Over
                                    ons</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}"
                                   class="text-base text-white hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-extrabold text-white">Contact</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li class="flex text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                                0180 643 643
                            </li>
                            <li class="flex text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                                info@basicwash.nl
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base text-white xl:text-center">&copy; 2023 Basic Wash, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
