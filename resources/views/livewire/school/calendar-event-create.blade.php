<div class="p-3 bg-white border">


  <div class="d-flex justify-content-start">
    <h1 class="h5 o-heading mb-4">
      Create event
    </h1>
  </div>


  {{-- Title --}}
  <div class="form-group mb-4">
    <label class="h5 font-weight-bold">Title *</label>
    <input type="text"
        class="form-control bg-light rounded-lg"
        wire:model="title">
    @error ('title') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  {{-- Single/Multi day setting --}}
  <div class="form-group mb-4">
    <label class="h5 font-weight-bold">Single or Multiple day *</label>

    <div>
      @if ($modes['multiDay'])
        <div class="">
          Multiple days
        </div>
        <div>
          <button class="btn text-primary pl-0" wire:click="exitMode('multiDay')">
            Make Single day
          </button>
        </div>
      @else
        <div class="">
          Single day
        </div>
        <div>
          <button class="btn text-primary pl-0" wire:click="enterMode('multiDay')">
            Make Multiple day
          </button>
        </div>
      @endif
    </div>
  </div>


  {{-- Date part --}}
  @if (true || ! $eventCreationDay)
  <div>
    <label class="h5 font-weight-bold">Date *</label>
  </div>
  @endif

  <div class="d-flex mb-4">
    <div class="mr-5">
      @if ($modes['multiDay'])
        <div class="d-flex mb-2">
          <span class="mr-2 font-weight-bold">Start Date:</span>
          @if ($start_date)
            {{ $selectedStartDay }}
          @else
            <div class="text-muted">
              <i class="fas fa-exclamation-circle mr-1"></i>
              Date not selected
            </div>
          @endif
        </div>
      @else
        <div class="d-flex flex-column mb-2">
          @if ($start_date)
            <div>
              {{ $selectedStartDay }}
            </div>
          @else
            <div class="text-muted">
              <i class="fas fa-exclamation-circle mr-1"></i>
              Date not selected
            </div>
          @endif
        </div>
      @endif
      @if (true || ! $eventCreationDay)
        @livewire ('school.calendar-date-picker-nepali', ['emitDate' => 'start_date',], key(rand()))
      @endif
    </div>


    @if ($modes['multiDay'])
      <div>
        <div class="d-flex mb-2">
          <span class="mr-2 font-weight-bold">End Date: </span>
            @if ($end_date)
              {{ $selectedEndDay }}
            @else
              <div class="text-muted">
                <i class="fas fa-exclamation-circle mr-1"></i>
                Date not selected
              </div>
            @endif
        </div>
        @livewire ('school.calendar-date-picker-nepali', ['emitDate' => 'end_date',], key(rand()))
      </div>
    @endif
  </div>


  {{-- Is holiday --}}
  <div class="form-group mb-4">
    <label class="h5 font-weight-bold">Is holiday *</label>
    <select class="form-control" wire:model="is_holiday">
      <option>---</option>
      <option value="no">No</option>
      <option value="yes">Yes</option>
    </select>
    @error ('is_holiday') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  @if ($calendarGroups != null &&  count($calendarGroups) > 0)
    {{-- Calendar group decision --}}
    <div class="form-group mb-4">
      <label class="h5 font-weight-bold">Applicable to *</label>

      <div>
        @if ($modes['allCalendarGroups'])
          <div class="">
            All calendar groups
          </div>
          <div>
            <button class="btn text-primary pl-0" wire:click="exitMode('allCalendarGroups')">
              Make for a single group
            </button>
          </div>
        @else
          <div class="">
            Single calendar group
          </div>
          <div>
            <button class="btn text-primary pl-0" wire:click="enterMode('allCalendarGroups')">
              Make for all group
            </button>
          </div>
        @endif
      </div>
    </div>

    @if (! $modes['allCalendarGroups'])
      {{-- Calendar group --}}
      <div class="form-group mb-4">
        <label class="h5 font-weight-bold">Calendar group *</label>
        <select class="form-control" wire:model="calendar_group_id">
          <option>---</option>
          @foreach ($calendarGroups as $calendarGroup)
            <option value="{{ $calendarGroup->calendar_group_id }}">{{ $calendarGroup->name }}</option>
          @endforeach
        </select>
        @error ('calendar_group_id') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    @endif
  @endif


  <div class="py-3 m-0">

    @include ('partials.button-store')
    @include ('partials.button-cancel', ['clickEmitEventName' => 'exitCalendarEventCreate',])

    <button wire:loading class="btn">
      <span class="spinner-border text-info mr-3" role="status">
      </span>
    </button>
  </div>


</div>
