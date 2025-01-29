<div class="p-3 border bg-white">

  <h1 class="h5 o-heading mb-4">
    Create new gallery
  </h1>

  <div class="form-group">
    <label>Name *</label>
    <input type="text" class="form-control" wire:model="name" placeholder="Name">
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea rows="3" class="form-control" wire:model="description" placeholder="Description">
    </textarea>
    @error('description') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="form-group">
    <label>Images *</label>
    <input type="file" class="form-control" wire:model.live="images" multiple>
    @error('images') <span class="text-danger">{{ $message }}</span> @enderror
    <button wire:loading class="btn">
      <span class="spinner-border text-info mr-3" role="status">
      </span>
    </button>
  </div>

  <div class="form-group">
    <label>Comment</label>
    <input type="text" class="form-control" wire:model="comment" placeholder="Comment">
    @error('comment') <span class="text-danger">{{ $message }}</span>@enderror
  </div>

  <div class="py-3">
    @include ('partials.button-store')
    @include ('partials.button-cancel', ['clickEmitEventName' => 'exitGalleryCreateMode',])
    @include ('partials.dashboard.spinner-button')
  </div>

</div>
