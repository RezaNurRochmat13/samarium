<div>

  <h2 class="h4 mb-3">
    Youtube video
  </h2>

  <div class="form-group">
    <label>Youtube video ID</label>
    <input type="text" class="form-control" wire:model="youtube_video_id">
    @error('youtube_video_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div>
    <button class="btn btn-success" wire:click="store">
      Save
    </button>
    <button class="btn btn-danger" wire:click="$dispatch('webpageContentCreateYoutubeVideoCancelled')">
      Cancel
    </button>
  </div>

</div>
