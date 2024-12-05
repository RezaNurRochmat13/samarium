<div class="">

  {{-- Top tool bar --}}

  {{-- Show in bigger screen --}}
  <x-toolbar-classic toolbarTitle="Gallery">

    @include ('partials.dashboard.spinner-button')

    @if (! $modes['displayMode'] || ! array_search(true, $modes))
    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "enterMode('createMode')",
        'btnIconFaClass' => 'fas fa-plus-circle',
        'btnText' => 'Create',
        'btnCheckMode' => 'createMode',
    ])
    @endif

  </x-toolbar-classic>

  <!-- Flash message div -->
  @if (session()->has('message'))
    <div class="p-2">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-3"></i>
        {{ session('message') }}
        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
          <span class="text-danger" aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  @endif

  <div class="p-0">

    @if ($modes['createMode'])
      @livewire('cms.dashboard.gallery-create')
    @elseif ($modes['displayMode'])
      @livewire('cms.dashboard.gallery-display', ['gallery' => $displayingGallery,])
    @elseif ($modes['listMode'])
      @livewire('cms.dashboard.gallery-list')
    @elseif ($modes['updateMode'])
      @livewire('cms.dashboard.gallery-update', ['gallery' => $updatingGallery,])
    @else
      @livewire('cms.dashboard.gallery-list')
    @endif

    @if ($deleteMode)
      @livewire('cms.dashboard.gallery-delete-confirm', ['deletingGallery' => $deletingGallery,])
    @endif

  </div>

</div>
