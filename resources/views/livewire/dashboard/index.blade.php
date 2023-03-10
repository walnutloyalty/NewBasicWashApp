<div>
    @if($type === 'products')
        @livewire('dashboard.products')
    @elseif($type ==='tickets')
        @livewire('dashboard.tickets')
    @else
        @livewire('dashboard.orders')
    @endif
</div>
