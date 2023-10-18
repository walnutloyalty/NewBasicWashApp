<tr x-show="private === {{ $isBusiness ? 'false' : 'true' }} && {{ $subscription['interval'] === 'maand' ? '' : '!' }}maand"
    wire:click="$emit('checkout', ['{{ $isBusiness ? 'z' : 'p' }}', '{{ $subscription['_id'] }}'])"
    class="cursor-pointer border-b border-gray-200 hover:bg-gray-50">
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
        <span class="ml-2 flex h-4 w-4 items-center justify-center rounded-full border border-gray-300 bg-white" aria-hidden="true"><span class="h-1.5 w-1.5 rounded-full bg-white"></span></span>
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ $subscription['name'] }}
        @if ($key == 1)
            @if (!$isBusiness)
                <span class="ml-1 inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Meest gekozen</span>
            @endif
        @endif
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        €{{ $subscription['price'] }}/{{ $subscription['interval'] == 'maand' ? 'maand' : 'jaar' }}
    </td>
</tr>
