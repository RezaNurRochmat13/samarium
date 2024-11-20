<div>


  {{--
     |
     | Top tool bar
     |
  --}}

  <x-toolbar-classic toolbarTitle="Calendar Group">

    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "enterMode('createCalendarGroupMode')",
        'btnIconFaClass' => 'fas fa-plus-circle',
        'btnText' => 'New',
        'btnCheckMode' => 'createMode',
    ])

    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "enterMode('listCalendarGroupMode')",
        'btnIconFaClass' => 'fas fa-list',
        'btnText' => 'List',
        'btnCheckMode' => 'listMode',
    ])

    @include ('partials.dashboard.tool-bar-button-pill', [
        'btnClickMethod' => "clearModes",
        'btnIconFaClass' => 'fas fa-times',
        'btnText' => '',
        'btnCheckMode' => '',
    ])

    @include ('partials.dashboard.spinner-button')

  </x-toolbar-classic>


  {{--
     |
     | Flash message div
     |
  --}}

  @if (session()->has('message'))
    @include ('partials.flash-message', [
        'flashMessage' => session('message'),
    ])
  @endif


  {{--
     |
     | Use required component as per mode
     |
  --}}

  @if ($modes['createCalendarGroupMode'])
    @livewire ('calendar.dashboard.calendar-group-create')
  @elseif ($modes['listCalendarGroupMode'])
    @livewire ('calendar.dashboard.calendar-group-list')
  @endif


</div>
