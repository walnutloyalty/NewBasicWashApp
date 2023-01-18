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
                             src="{{ asset('media/images/basic-wash-ulvenhout.webp') }}"
                             alt="BasicWash">
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full h-full" id="map">
                    </div>
                </div>
            </div>
        </div>
        <script>
            class CoordMapType {
                tileSize;
                maxZoom = 19;
                name = "Tile #s";
                alt = "Tile Coordinate Map Type";

                constructor(tileSize) {
                    this.tileSize = tileSize;
                }

                getTile(coord, zoom, ownerDocument) {
                    const div = ownerDocument.createElement("div");

                    div.innerHTML = String(coord);
                    div.style.width = this.tileSize.width + "px";
                    div.style.height = this.tileSize.height + "px";
                    div.style.fontSize = "10";
                    div.style.borderStyle = "solid";
                    div.style.borderWidth = "1px";
                    div.style.borderColor = "#AAAAAA";
                    div.style.backgroundColor = "#E5E3DF";
                    return div;
                }

                releaseTile(tile) {
                }
            }

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
                const beachMarker = new google.maps.Marker({
                    position: {lat: 51.54748668173409, lng: 4.798523070449019},
                    map,
                    icon: image,
                })


                map.addListener("maptypeid_changed", () => {
                    const showStreetViewControl = map.getMapTypeId() !== "coordinate";

                    map.setOptions({
                        streetViewControl: showStreetViewControl,
                    });
                });
                // Now attach the coordinate map type to the map's registry.
                map.mapTypes.set(
                    "coordinate",
                    new CoordMapType(new google.maps.Size(256, 256))
                );
            }

            window.initMap = initMap;
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIlcN7ZprmlKq5h2B_uw6rkbnisRxinb8&callback=initMap&v=weekly"></script>
    </div>

</x-app-layout>
