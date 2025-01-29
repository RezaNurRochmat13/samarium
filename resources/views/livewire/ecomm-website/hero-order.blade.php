<div>

  @if (! $modes['showForm'])
  <button class="btn mr-3 w-100" style="height: 120px; background-color: orange;"
      wire:click="enterMode('showForm')">
    <i class="fas fa-shopping-cart mr-3"></i>
    ORDER
  </button>
  @else
    <div class="card">
      <div class="card-header p-3">
        <h2 class="text-success">
          Confirm
        </h2>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label>
            <i class="fas fa-phone mr-2"></i>
            Phone
            @error ('phone')
              <span class="text-danger">
                {{ $message }}
              </span>
            @enderror
          </label>
          <input class="p-3 w-100" type="text" style="height: 50px; width: 100%; color: #555;" wire:model="phone">
        </div>

        <div class="mb-3">
          <label>
            <i class="fas fa-map-marker-alt mr-2"></i>
            Address
          </label>
          <input class="p-3 w-100" type="text" style="height: 50px; width: 100%; color: #555;" wire:model="address">
        </div>

        <div class="row">
          <div class="col-md-6">
            <button class="btn mr-3 text-white w-100" style="height: 100px; background-color: green; font-weight:
            bold" wire:click="store">
              <i class="fas fa-shopping-cart mr-3"></i>
              CONFIRM
            </button>
          </div>
          <div class="col-md-6">
            <button class="btn btn-danger mr-3 text-white w-100" style="height: 100px; font-weight: bold;" wire:click="exitMode('showForm')">
              <i class="fas fa-shopping-cart mr-3"></i>
              CANCEL
            </button>
          </div>
        </div>
      </div>
    </div>
  @endif

</div>
