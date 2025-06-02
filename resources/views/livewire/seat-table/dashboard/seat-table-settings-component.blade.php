<div>

  {{--
  |
  | Toolbar
  |
  --}}

  <x-toolbar-classic toolbarTitle="Settings">
    @include ('partials.dashboard.spinner-button')

    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "enterMode('createSeatTableMode')",
        'btnIconFaClass' => 'fas fa-plus-circle',
        'btnText' => 'Create Table',
        'btnCheckMode' => 'createSeatTableMode',
    ])

    @if ($modes['displaySeatTableMode'])
      @include ('partials.dashboard.tool-bar-button-pill', [
          'btnClickMethod' => "enterMode('displaySeatTableMode')",
          'btnIconFaClass' => 'fas fa-circle',
          'btnText' => 'Seat table display',
          'btnCheckMode' => 'displaySeatTableMode',
      ])
    @endif

    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "clearModes",
        'btnIconFaClass' => 'fas fa-times',
        'btnText' => '',
        'btnCheckMode' => '',
    ])
  </x-toolbar-classic>

  {{--
  |
  | Flash message div.
  |
  --}}

  @if (session()->has('message'))
    @include ('partials.flash-message', ['message' => session('message'),])
  @endif

  {{--
     |
     | Use required component as per mode
     |
  --}}

  @if ($modes['createSeatTableMode'])
    @livewire ('cafe-sale.dashboard.seat-table-create')
  @endif

</div>
