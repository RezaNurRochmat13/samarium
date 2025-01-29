<div class="bg-white border p-3">

  <div class="mb-3 font-weight-bold">
    Edit company info
  </div>
  <div class="form-group">
    <label class="font-weight-bold">
      Key
    </label>
    <input type="text" class="form-control" wire:model="info_key">
  </div>
  <div class="form-group">
    <label class="font-weight-bold">
      Value
    </label>
    <input type="text" class="form-control" wire:model="info_value">
  </div>

  <div>
    @include ('partials.button-store')
    @include ('partials.button-cancel', ['clickEmitEventName' => 'companyInfoUpdateCancelled',])
  </div>

</div>
