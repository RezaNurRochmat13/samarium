<div class="card shadow-sm">

  <div class="card-body p-3">
    <h1 class="h5 o-heading mb-4">
      Create institution
    </h1>
    <div class="form-group">
      <label>Name *</label>
      <input type="text" class="form-control" wire:model="name">
      @error ('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
      <label>Country *</label>
      <input type="text" class="form-control" wire:model="country">
      @error ('country') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
      <label>Insitution type *</label>
      <input type="text" class="form-control" wire:model="institution_type">
      @error ('institution_type') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="py-3 m-0">
      @include ('partials.button-store')
      @include ('partials.button-cancel', ['clickEmitEventName' => 'educInstitutionCreateCancelled',])
      @include ('partials.dashboard.spinner-button')
    </div>
  </div>

</div>
