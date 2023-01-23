<x-app-layout>
    @section('title', 'Locaties')
    <?php
    $check = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
  <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
</svg>
';
    ?>
    <div class="relative px-4 pt-16 sm:px-6 lg:pt-24">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-white sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-12 h-12 inline-flex my-8 text-pink-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                </svg>
                <h2 class="text-black font-extrabold text-2xl">
                    Was onbeperkt je auto op al onze Basic Wash locaties. Hier is ook die van jou te vinden!
                </h2>
            </div>
            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-2">
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="h-64 w-full object-cover"
                             src="{{ asset('media/images/basic-wash-over-ons.jpeg') }}"
                             alt="">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <p class="text-3xl font-semibold text-pink-600">Locaties</p>
                            <p class="mt-3 text-base text-black">Was onbeperkt je auto op al onze Basic Wash
                                locaties. Hier is ook die van jou te vinden!
                            </p>
                        </div>
                        <a href="{{ route('kentekencheck') }}"
                           class="bg-pink-600 rounded-lg self-center px-4 py-2 text-white my-6 hover:bg-cyan-600 cursor-pointer">Zeker
                            weten of jouw auto past? Doe de kentekencheck!</a>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <div class="h-[31rem]" id="map">
                        </div>
                    </div>
                </div>
            </div>
            <!--Breda carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="breda">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <img class="w-full object-cover"
                                     src="{{ asset('media/images/basic-wash-minervum-breda.webp') }}"
                                     alt="BasicWash">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Express Breda
                                        </p>
                                        <p class="text-black mt-2"> 24/7 open
                                        </p>
                                        <p class="mt-3 text-base text-gray-500"> Minervum 7001-C, 4817 ZJ Breda
                                        </p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 290cm
                                            <?= $check ?> Wasbreedte - 258cm
                                            <?= $check ?> Bandenpomp
                                            <?= $check ?> Stofzuigers
                                            <?= $check ?> Tankstation
                                            <?= $check ?> Geschikt voor bussen
                                            <?= $check ?> Vlekvrij naspoelen
                                            <?= $check ?> Extra snel wassen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Breda carwash-->
            <!--Hellevoetsluis carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Hellevoetsluis
                                        </p>
                                        <p class="text-black mt-2"> Ma - Zo ... 07:00-21:00

                                        </p>
                                        <p class="mt-3 text-base text-gray-500"> Rijksstraatweg 65, Hellevoetsluis
                                        </p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 260cm
                                            <?= $check ?> Wasbreedte - 238cm
                                            <?= $check ?> HD boxen
                                            <?= $check ?> Stofzuigers
                                            <?= $check ?> Tankstation
                                            <?= $check ?> Wasserette</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <img class="w-full object-cover"
                                     src="{{ asset('media/images/basic-wash-hellevoetsluis.jpeg') }}"
                                     alt="BasicWash">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="hellevoetsluis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Hellevoetsluis carwash-->
            <!--Sint willebrord carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="sint-willebrord">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <img class="w-full object-cover"
                                     src="{{ asset('media/images/basic-wash-sint-willebrord.webp') }}"
                                     alt="BasicWash">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Sint Willebrord
                                        </p>
                                        <p class="text-black mt-2"> 24/7 open
                                        </p>
                                        <p class="mt-3 text-base text-gray-500"> Poppestraat 120, Sint Willebrord
                                        </p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 240cm
                                            <?= $check ?> Wasbreedte - 238cm
                                            <?= $check ?> HD boxen
                                            <?= $check ?> Bandenpomp
                                            <?= $check ?> Stofzuigers
                                            <?= $check ?> Tankshop
                                            <?= $check ?> Tankstation
                                            <?= $check ?> Wasserette</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end sint willebrord carwash-->
            <!--terheijden carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Terheijden
                                        </p>
                                        <p class="text-black mt-2"> 24/7 open
                                        </p>
                                        <p class="mt-3 text-base text-gray-500"> Zeggelaan 200, Terheijden
                                        </p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 260cm
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
                                     src="{{ asset('media/images/basic-wash-terheijden.webp') }}"
                                     alt="BasicWash">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="terheijden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end terheijden carwash-->
            <!--ulvenhout carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="ulvenhout">
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
                                            <?= $check ?> Washhoogte - 260cm
                                            <?= $check ?> Wasbreedte - 238cm
                                            <?= $check ?> Bandenpomp
                                            <?= $check ?> Tankstation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end ulvenhout carwash-->
            <!--oosterhout carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Oosterhout
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">In aanbouw (verwacht Q1
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 260cm
                                            <?= $check ?> Wasbreedte - 258cm
                                            <?= $check ?> HD boxen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="oosterhout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end oosterhout carwash-->
            <!--hoek van holland carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="hoek-van-holland">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Hoek van Holland
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">In aanbouw (verwacht Q1
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 290cm
                                            <?= $check ?> Wasbreedte - 258cm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end hoek van holland carwash-->
            <!--zevenbergen carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Zevenbergen
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">In aanbouw (verwacht Q2
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 250cm
                                            <?= $check ?> Wasbreedte - 258cm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="zevenbergen">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end zevenbergen carwash-->
            <!--hellevoetsluis II carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="hellevoetsluis-II">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Hellevoetsluis II
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">Wordt voorbereid (verwacht Q3
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> 2 Carwashes
                                            <?= $check ?> Washhoogte - 290cm
                                            <?= $check ?> Wasbreedte - 258cm
                                            <?= $check ?> HD Boxen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end hellevoetsluis II carwash-->
            <!--roosendaal carwash-->
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Roosendaal
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">In aanbouw (verwacht Q1
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 260cm
                                            <?= $check ?> Wasbreedte - 245cm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="roosendaal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end roosendaal carwash-->
            <!--barendrecht carwash--->
            <div class="relative mb-32">
                <div class="absolute inset-0">
                    <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                    <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-2 h-[20rem]">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full h-full" id="barendrecht">
                            </div>
                        </div>
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">
                                    <div class="mt-2 block">
                                        <p class="text-xl font-bold text-pink-600"> Basic Wash Barendrecht
                                        </p>
                                        <p class="text-black mt-2 font-extrabold text-2xl">In aanbouw (verwacht Q1
                                            2023)</p>
                                        <p class="mt-3 text-base text-gray-500 ">
                                            <?= $check ?> Washhoogte - 250cm
                                            <?= $check ?> Wasbreedte - 238cm
                                            <?= $check ?> HD Boxen
                                            <?= $check ?> Stofzuigers
                                            <?= $check ?> Bandenpomp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end barendrecht carwash-->
        </div>
        <script>
            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 9,
                    center: {lat: 51.73101662934484, lng: 4.40816061152588},
                });


                setMarkers(map);
                setMarkersNewCarWashes(map);
            }

            const carWashes = [
                ["Breda", 51.583401636513855, 4.827728891790584, 4],
                ["Hellevoetsluis", 51.83868411454844, 4.134269020748435, 5],
                ["Sint-willebrord", 51.55600067228744, 4.583885951342563, 3],
                ["Terheijden", 51.649919847550784, 4.759400098614774, 2],
                ["Ulvenhout", 51.54748668173409, 4.798523070449019, 1],
            ];

            const builingCarWashes = [
                ["Oosterhout", 51.64103914807376, 4.8615110862262805, 6],
                ["Hoek-van-Holland", 51.9831583196553, 4.122529376194119, 7],
                ["Zevenbergen", 51.64558773578224, 4.604439964354876, 8],
                ["Hellevoetsluis (nieuw)", 51.83784611852667, 4.0884641263154355, 4],
                ["Roosendaal", 51.5370077255092, 4.469610079032279, 5],
                ["Barendrecht", 51.85101663531878, 4.547987584612516, 5]
            ]

            function setMarkersNewCarWashes(map) {
                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: "poly",
                };

                for (let i = 0; i < builingCarWashes.length; i++) {
                    const newCarWash = builingCarWashes[i];

                    new google.maps.Marker({
                        position: {lat: newCarWash[1], lng: newCarWash[2]},
                        map,
                        icon: image,
                        shape: shape,
                        title: newCarWash[0],
                        zIndex: newCarWash[3],
                    });
                }
            }

            function setMarkers(map) {
                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: "poly",
                };

                for (let i = 0; i < carWashes.length; i++) {
                    const carWash = carWashes[i];

                    new google.maps.Marker({
                        position: {lat: carWash[1], lng: carWash[2]},
                        map,
                        icon: image,
                        shape: shape,
                        title: carWash[0],
                        zIndex: carWash[3],
                    });
                }
            }

            function breda() {
                const map = new google.maps.Map(document.getElementById("breda"), {
                    zoom: 13,
                    center: {lat: 51.583401636513855, lng: 4.827728891790584},
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

                const bredaMarker = new google.maps.Marker({
                    position: {lat: 51.583401636513855, lng: 4.827728891790584},
                    map,
                    icon: image,
                })

            }

            function hellevoetsluis() {
                const map = new google.maps.Map(document.getElementById("hellevoetsluis"), {
                    zoom: 13,
                    center: {lat: 51.83868411454844, lng: 4.134269020748435},
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

                const hellevoetsluisMarker = new google.maps.Marker({
                    position: {lat: 51.83868411454844, lng: 4.134269020748435},
                    map,
                    icon: image,
                })

            }

            function sint_willebrord() {
                const map = new google.maps.Map(document.getElementById("sint-willebrord"), {
                    zoom: 13,
                    center: {lat: 51.55600067228744, lng: 4.583885951342563},
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

                const sintWillebrordMarker = new google.maps.Marker({
                    position: {lat: 51.55600067228744, lng: 4.583885951342563},
                    map,
                    icon: image,
                })

            }

            function terheijden() {
                const map = new google.maps.Map(document.getElementById("terheijden"), {
                    zoom: 13,
                    center: {lat: 51.649919847550784, lng: 4.759400098614774},
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

                const terheijdenMarker = new google.maps.Marker({
                    position: {lat: 51.649919847550784, lng: 4.759400098614774},
                    map,
                    icon: image,
                })

            }

            function ulvenhout() {
                const map = new google.maps.Map(document.getElementById("ulvenhout"), {
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

            function oosterhout() {
                const map = new google.maps.Map(document.getElementById("oosterhout"), {
                    zoom: 13,
                    center: {lat: 51.64103914807376, lng: 4.8615110862262805},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const oosterhoutMarker = new google.maps.Marker({
                    position: {lat: 51.64103914807376, lng: 4.8615110862262805},
                    map,
                    icon: image,
                })

            }

            function hoek_van_holland() {
                const map = new google.maps.Map(document.getElementById("hoek-van-holland"), {
                    zoom: 13,
                    center: {lat: 51.9831583196553, lng: 4.122529376194119},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const hoekVanHollandMarker = new google.maps.Marker({
                    position: {lat: 51.9831583196553, lng: 4.122529376194119},
                    map,
                    icon: image,
                })

            }

            function zevenbergen() {
                const map = new google.maps.Map(document.getElementById("zevenbergen"), {
                    zoom: 13,
                    center: {lat: 51.64558773578224, lng: 4.604439964354876},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const zevenbergenMarker = new google.maps.Marker({
                    position: {lat: 51.64558773578224, lng: 4.604439964354876},
                    map,
                    icon: image,
                })

            }

            function hellevoetsluisII() {
                const map = new google.maps.Map(document.getElementById("hellevoetsluis-II"), {
                    zoom: 13,
                    center: {lat: 51.83784611852667, lng: 4.0884641263154355},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const hellevoetsluisIIMarker = new google.maps.Marker({
                    position: {lat: 51.83784611852667, lng: 4.0884641263154355},
                    map,
                    icon: image,
                })

            }

            function roosendaal() {
                const map = new google.maps.Map(document.getElementById("roosendaal"), {
                    zoom: 13,
                    center: {lat: 51.5370077255092, lng: 4.469610079032279},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const roosendaalMarker = new google.maps.Marker({
                    position: {lat: 51.5370077255092, lng: 4.469610079032279},
                    map,
                    icon: image,
                })

            }

            function barendrecht() {
                const map = new google.maps.Map(document.getElementById("barendrecht"), {
                    zoom: 13,
                    center: {lat: 51.85101663531878, lng: 4.547987584612516},
                    streetViewControl: false,
                    mapTypeId: "roadmap",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap"],
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                });

                const image = {
                    url: "{{ asset('media/images/basic-wash-locaties-in-aanbouw.png') }}",
                    scaledSize: new google.maps.Size(50, 60),
                };

                const barendrechtMarker = new google.maps.Marker({
                    position: {lat: 51.85101663531878, lng: 4.547987584612516},
                    map,
                    icon: image,
                })

            }

            function initialize() {
                initMap();
                breda();
                hellevoetsluis();
                sint_willebrord();
                terheijden();
                ulvenhout();
                oosterhout();
                hoek_van_holland();
                zevenbergen();
                hellevoetsluisII();
                roosendaal();
                barendrecht();
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIlcN7ZprmlKq5h2B_uw6rkbnisRxinb8&callback=initialize"></script>
    </div>
</x-app-layout>
