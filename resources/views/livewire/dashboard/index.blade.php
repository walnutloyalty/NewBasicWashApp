<div>
    @if($type === 'products')
        @livewire('dashboard.products')
    @else
        @livewire('dashboard.orders')
    @endif
</div>
