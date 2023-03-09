<x-app-layout>
    @section('title', 'De voordeligste wasstraat van Ulvenhout')
    <?php
    $check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
  <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
</svg>
';
    ?>
    <div class="relative px-4 pt-16 pb-20 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-white sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="font-extrabold tracking-tight text-pink-600 sm:text-5xl"> De voordeligste carwash van
                    Ulvenhout
                </h2>
                <p class="mx-auto mt-3 text-xl text-black sm:mt-4"> Bij Basic Wash Sint Ulvenhout kan je direct met je
                    auto terecht. Onze carwash kan auto’s wassen tot 2,40m
                    hoog. Onze wasprogramma’s zijn geoptimaliseerd om jou zo snel mogelijk weer in een schone auto te
                    laten
                    rijden. Met het Basic wasprogramma is het zelfs mogelijk om je auto in 5 minuten te wassen. Kom
                    wassen bij
                    de voordeligste carwash van Ulvenhout en ervaar zelf hoeveel tijd en geld je bespaart.</p>
            </div>
            <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <div class="mt-2 block">
                                <p class="text-xl font-bold text-pink-600"> Basic Wash Ulvenhout
                                </p>
                                <p class="text-black mt-2"> Ma - Vr 07:00 - 21:00 </p>
                                <p class="text-black">Za & Zo 08:00 - 21:00</p>
                                <p class="mt-3 text-base text-gray-500"> Molenstraat 1A, Ulvenhout
                                </p>
                                <p class="mt-3 text-base text-gray-500 ">
                                    <?= $check ?> Washoogte - 260cm
                                    <?= $check ?> Wasbreedte - 238cm
                                    <?= $check ?> Bandenpomp
                                    <?= $check ?> Tankstation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="w-full object-cover"
                             src="{{ asset('media/images/basic-wash-ulvenhout.webp') }}"
                             alt="BasicWash">
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full h-full" id="map">
                    </div>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href="{{ route('particulier') }}" class="font-bold text-lg text-white bg-pink-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-8 py-5 inline-flex items-center">
                    Ik wil een abonnement afsluiten
                </a>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: {lat: 51.54748668173409, lng: 4.798523070449019},
                streetViewControl: false,
                mapTypeId: "roadmap",
                mapTypeControlOptions: {
                    mapTypeIds: ["roadmap"],
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                },
            });

            const image = {
                url: "{{ asset('media/images/basic-wash-locaties.png') }}",
                scaledSize: new google.maps.Size(50, 60),
            };

            const ulvenhoutMarker = new google.maps.Marker({
                position: {lat: 51.54748668173409, lng: 4.798523070449019},
                map,
                icon: image,
            })
        }

        window.initMap = initMap;
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIlcN7ZprmlKq5h2B_uw6rkbnisRxinb8&callback=initMap&v=weekly"></script>
</x-app-layout>
