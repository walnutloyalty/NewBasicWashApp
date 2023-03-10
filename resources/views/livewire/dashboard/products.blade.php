<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Producten</h1>
            <p class="mt-2 text-sm text-gray-700">De huidige producten lijst opgehaald uit Walnut</p>
        </div>
       
    </div>
    <div class="mt-8 flow-root">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Naam</th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Type abbo
                            </th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Prijs
                            </th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">periode
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="">In shop</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($products as $product)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                {{$product['name']}}</td>
                            <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">@if($product['zakelijk']) Zakelijk @else Particulier @endif</td>
                            <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">€{{$product['price']}}</td>
                            </td>
                            <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{$product['interval']}}</td>
                            <td wire:click="toggle({{$product['id']}})"
                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <button type="button" class="cursor-pointer @if($product['in_shop']) text-green-600 @else text-red-600 @endif">@if($product['in_shop']) Active @else Inactive @endif<span
                                        class="sr-only"></span></button>
                            </td>
                        </tr>
                        @endforeach

                        <!-- More people... -->
                    </tbody>
             
                {{ $products->links() }}
                </table>
            </div>
        </div>
    </div>
</div>
