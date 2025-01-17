<div class="bg-white p-3">


  <div class="mb-4">
    <h1 class="h5 o-heading">
      Create Customer
    </h1>
  </div>

  <div class="my-3 mb-4 bg-light border p-2">
    <i class="fas fa-exclamation-circle mr-1"></i>
    Fields marked with asterik (*) are compulsory.
  </div>

  <div class="form-group">
    <label>Name *</label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>
      Phone
    </label>
    <input type="text" class="form-control" wire:model="phone">
    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" wire:model="address">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>PAN Number</label>
    <input type="text" class="form-control" wire:model="pan_num">
    @error('pan_num') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  @include ('partials.button-store')
  @include ('partials.button-cancel', ['clickEmitEventName' => 'exitCreateMode',])


</div>
