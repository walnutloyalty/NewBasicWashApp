<footer class="bg-pink-600" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <img class="h-10" src="{{ asset('media/logos/basic-wash-logo.png') }}"
                     alt="Basic Wash">
                <div>
                    <a href="{{ route('algemene-voorwaarden') }}"><p class="text-base text-white font-extrabold hover:underline cursor-pointer">Algemene voorwaarden</p></a>
                    <a href="{{ route('abonnements-voorwaarden') }}"><p class="text-base text-white font-extrabold hover:underline cursor-pointer">Abonnements voorwaarden</p></a>
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
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-extrabold text-white">Webshop</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('particulier') }}" class="text-base text-white hover:underline">Particulier</a>
                            </li>

                            <li>
                                <a href="{{ route('zakelijk') }}" class="text-base text-white hover:underline">Zakelijk wassen</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-extrabold text-white">Locaties</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('breda') }}" class="text-base text-white hover:underline">Minervum 7001-C, 4817 ZJ
                                    Breda</a>
                            </li>

                            <li>
                                <a href="{{ route('hellevoetsluis') }}" class="text-base text-white hover:underline">Rijksstraatweg 65, 3222 KB
                                    Hellevoetsluis</a>
                            </li>

                            <li>
                                <a href="{{ route('sint-willebrord') }}" class="text-base text-white hover:underline">Poppestraat 130, 4711 EZ Sint
                                    Willebrord</a>
                            </li>

                            <li>
                                <a href="{{ route('terheijden') }}" class="text-base text-white hover:underline">Zeggelaan 200, 4844 SK
                                    Terheijden</a>
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
                                <a href="{{ route('over-ons') }}" class="text-base text-white hover:underline">Over ons</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="text-base text-white hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-extrabold text-white">Contact</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li class="flex text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                                0180 643 643
                            </li>
                            <li class="flex text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
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
            <p class="text-base text-white xl:text-center">&copy; 2022 Basic Wash, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
