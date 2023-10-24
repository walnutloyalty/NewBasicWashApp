<tr x-show="private === {{ $isBusiness ? 'false' : 'true' }} && {{ $subscription['interval'] === 'maand' ? '' : '!' }}maand"
    wire:click="$emit('checkout', ['{{ $isBusiness ? 'z' : 'p' }}', '{{ $subscription['_id'] }}'])"
    class="cursor-pointer border-b border-gray-200 hover:bg-gray-50">
    <td class="whitespace-nowrap p-0 pr-2 text-sm font-medium text-gray-900 sm:py-4 sm:pl-4 sm:pr-3">
        <span class="ml-2 flex h-4 w-4 items-center justify-center rounded-full border border-gray-300 bg-white" aria-hidden="true"><span class="h-1.5 w-1.5 rounded-full bg-white"></span></span>
    </td>
    <td class="whitespace-nowrap px-0 py-4 text-sm text-gray-500 sm:px-3">
        @if ($key == 1)
            @if (!$isBusiness)
                <span class="block w-fit items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20 sm:ml-1 sm:hidden">Meest gekozen</span>
            @endif
        @endif
        {{ $subscription['name'] }}
        @if ($key == 1)
            @if (!$isBusiness)
                <span class="hidden w-fit items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20 sm:ml-1 sm:inline-flex">Meest gekozen</span>
            @endif
        @endif
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        €{{ $subscription['price'] }}/{{ $subscription['interval'] == 'maand' ? 'maand' : 'jaar' }}
    </td>
</tr>
