<div>
    <span>
      <i class="fas fa-shopping-cart text-info-rm mr-1"></i>
    </span>
    
    @if ($newOrderCount > 0)
    <span wire:poll.30000ms class="badge badge-pill
        @if ($newOrderCount > 0)
          badge-danger
        @else
          badge-light border
        @endif
        ">
      {{ $newOrderCount }}
    </span>
    @endif
</div>
