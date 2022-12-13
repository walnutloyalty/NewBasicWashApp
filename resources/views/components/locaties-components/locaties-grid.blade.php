<div class="relative bg-gray-50 px-4 pt-16 pb-20 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">
    <div class="absolute inset-0">
        <div class="h-1/3 bg-white sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
        <div class="text-center">
            <h2 class="font-extrabold tracking-tight text-pink-600 sm:text-5xl">{{ $title ?? ''}}</h2>
            <p class="mx-auto mt-3 text-xl text-black sm:mt-4">{{ $subtitle ?? ''}}</p>
        </div>
        <div class="mx-auto mt-44 grid gap-5 lg:max-w-none lg:grid-cols-3">
            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <div class="mt-2 block">
                            <p class="text-xl font-bold text-pink-600">{{ $firstGridTitle ?? ''}}</p>
                            <p class="text-black">{{ $openingstijden ?? ''}}</p>
                            <p class="mt-3 text-base text-gray-500">{{ $firstGridAdres ?? ''}}</p>
                            <p class="mt-3 text-base text-gray-500 ">{{ $washingExtras ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex-shrink-0">
                    <img class="w-full object-cover"
                         src="{{ $secondGridImage ?? ''}}"
                         alt="">
                </div>
            </div>
            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="w-full h-full">
                    {!! Mapper::render() !!}
                </div>
            </div>
        </div>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIlcN7ZprmlKq5h2B_uw6rkbnisRxinb8&libraries=places"></script>
</div>
