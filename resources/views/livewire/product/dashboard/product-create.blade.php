<div class="bg-white p-3">


  {{-- Top heading bar --}}
  <div class="mb-4">
    <h1 class="h5 font-weight-bold">
      Add product
    </h1>
  </div>

  <div class="row border pb-0 border-0" style="margin:auto;">

    {{-- Left side of the product create page --}}
    <div class="col-md-6 pl-0">

      <div class="card h-100 border-0 pb-0">
        <div class="card-body pl-0 h-100 pb-0">
      
          <div class="form-group">
            <label class="h5" for="">Name *</label>
            <input type="text"
                class="form-control shadow-sm"
                wire:model="name">
            @error ('name') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
      
          <div class="form-group">
            <label class="h5">Category *</label>
            <select class="custom-select shadow-sm" wire:model="product_category_id">
              <option>---</option>
              @foreach ($productCategories as $productCategory)
                <option value="{{ $productCategory->product_category_id }}">
                  {{ $productCategory->name }}
                </option>
              @endforeach
            </select>
            @error ('product_category_id') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
      
      
          <div class="form-group">
            <label class="h5" for="">Selling price *</label>
            <input type="text"
                class="form-control shadow-sm"
                wire:model="selling_price">
            @error('selling_price') <span class="text-danger">{{ $message }}</span> @enderror
          </div>

          <div class="bg-white pb-0">

            <h2 class="h5">
              Description *
            </h2>
            <h3 class="h6 text-muted">
              Enter product description here
            </h3>
            <div class="form-group mb-0">
              <textarea type="text"
                  class="form-control mb-0"
                  rows="5"
                  wire:model="description">
              </textarea>
              @error ('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

          </div>
      
      
        </div>
      </div>

    </div>


    {{-- Right side of the product create page --}}
    <div class="col-md-6 pl-0">

      <div class="bg-white pl-0 p-2 mb-3">

        <h2 class="h5">
          Image
          <span class="text-muted ml-1">
            (Optional)
          </span>
        </h2>
        <h3 class="h6 text-muted">
          Enter product image here
        </h3>
        <div class="form-group">
          <input type="file" class="form-control" wire:model.live="image">
          @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

      </div>


      @if (false)
      <div class="border bg-white p-2 mb-3 shadow-sm">

        <div class="row">
          <div class="col-md-6">
            <h2 class="h5">
              Stock
            </h2>
            <h3 class="h6 text-muted">
              Enter stock related information here
            </h3>
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-end">
              <div>
                @if ($modes['stockApplicable'])
                  <button class="btn btn-danger" wire:click="makeStockNotApplicable">
                    Stock not applicable
                  </button>
                @else
                  <button class="btn btn-success" wire:click="makeStockApplicable">
                    Stock applicable
                  </button>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endif

        @if ($modes['stockApplicable'])
        <div class="card shadow-sm border-0 mt-3 shadow-sm">
          <div class="card-body p-0 border-0">
        
            @if (false)
            <div class="form-group">
              <label for="">Stock applicable</label>
              <select class="custom-select" wire:model="stock_applicable">
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              @error('stock_applicable') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @endif

            <div class="form-group">
              <label>Product type</label>
              <select class="custom-select" wire:model.live="product_type">
                  <option value="normal">Normal</option>
                  <option value="base">Base</option>
                  <option value="sub">Sub</option>
              </select>
              @error ('product_type') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        
            @if (! $modes['subProduct'])
            <div class="form-group">
              <label for="">Inventory unit</label>
              <input type="text"
                  class="form-control"
                  wire:model="inventory_unit">
              @error ('inventory_unit') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        
            <div class="form-group">
              <label for="">Opening stock count</label>
              <input type="text"
                  class="form-control"
                  wire:model="opening_stock_count">
              @error('opening_stock_count') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        
            <div class="form-group">
              <label for="">Low stock notification count</label>
              <input type="text"
                  class="form-control"
                  wire:model="stock_notification_count">
              @error('stock_notification_count') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @endif
        
            @if (false)
            <div class="form-group">
              <label>Is base product</label>
              <select class="custom-select" wire:model="is_base_product">
                <option>---</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
              </select>
              @error ('is_base_product') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            @endif
        
            @if ($modes['subProduct'])
            <div class="form-group">
              <label>Base product</label>
              <select class="custom-select" wire:model="base_product_id">
                <option>---</option>
                @if (true)
                @foreach ($baseProducts as $baseProduct)
                  <option value="{{ $baseProduct->product_id }}">
                    {{ $baseProduct->name }}
                  </option>
                @endforeach
                @endif
              </select>
              @error ('base_product_id') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            @endif
        
        
            @if ($modes['subProduct'])
            <div class="form-group">
              <label for="">Inventory Unit Consumption</label>
              <input type="text"
                  class="form-control"
                  wire:model="inventory_unit_consumption">
              @error ('inventory_unit_consumption') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @endif
        
          </div>
        </div>
      </div>
      @endif


    </div>
  </div>

  {{-- Save/Cancel buttons div --}}
  <div class="py-4 m-0">

    @include ('partials.button-store')
    @include ('partials.button-cancel', ['clickEmitEventName' => 'exitCreateProductMode',])

    <button wire:loading class="btn">
      <span class="spinner-border text-info mr-3" role="status">
      </span>
    </button>
  </div>


</div>
