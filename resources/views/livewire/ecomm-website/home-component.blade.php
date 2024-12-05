<div style="">


  {{-- Online store hero --}}
  @if (false)
  @include ('partials.os.hero')
  @endif

  @if (false)
  @include ('partials.ecomm-website.main-flier')
  @endif

  @if (false)
  <div class="border shadow-sm">
    @include ('partials.ecomm-website.main-hero')
  </div>
  @endif


  @if (true)
  {{-- Show only in big screens for now --}}
  <div class="container-fluid bg-light d-none d-md-block py-4" style="{{--background-image: linear-gradient(to right, #a00, #003);--}}">
  <div class="container pt-4-rm">
    <div class="row border-rm shadow-rm">

      {{-- Product categories --}}
      <div class="col-md-3 py-3-rm bg-info-rm">
        <div class="d-flex flex-column h-100" >
          <div class="bg-white h-100-rm py-3 flex-grow-1 border rounded" style="">
            <div class="h4 mb-3 pl-3 font-weight-bold text-white-rm">
              Product categories
            </div>
            @php
              $ii = 0;
            @endphp
            @foreach ($productCategories as $productCategory)
              @if ($ii >= 5)
                @break
              @endif
              <a
                  href="{{ route('website-product-category-product-list', [$productCategory->product_category_id, $productCategory->name]) }}"
                  class="text-reset-rm text-decoration-none text-dark"
              >
                <div class="px-3 py-2 border-top-rm">
                    @if (false)
                    <img class="img-fluid h-25-rm w-100-rm"
                        src="{{ asset('storage/' . $productCategory->image_path) }}"
                        alt="{{ $productCategory->name }}"
                        style="max-height: 50px; max-width: 50px;">
                    @endif
                    <button class="btn btn-outline-danger w-100 text-left-rm">
                      <span class="h6 font-weight-bold">
                        @if (false)
                        <i class="fas fa-arrow-right mr-1"></i>
                        @endif
                        {{ $productCategory->name }}
                      </span>
                    </button>
                </div>
              </a>
              @php
                $ii++;
              @endphp
            @endforeach
            <div class="p-3 border-top text-center">
              <a href="#o-all-categories" class="text-dark">
              @if (false)
              <i class="fas fa-dice-d6 mr-1"></i>
              See all categories
              @endif
              <button class="btn btn-danger w-100 text-left-rm">
                See all categories
              </button>
              </a>
            </div>
          </div>
        </div>


      </div>


      {{-- Featured products --}}
      <div class="col-md-9 pt-3 bg-white-rm">

        <div class="d-flex flex-column h-100">
          <div>
            <h2 class="h4 bg-white-rm text-dark font-weight-bold p-3-rm py-4-rm mb-4" style="{{--background-color: white; color: gray;--}}">
              Featured products
            </h2>
          </div>
          <div class="flex-grow-1 bg-white-rm">
          <div class="row bg-white-rm py-3" style="margin: auto;">

            @foreach (\App\Product::where('featured_product', 'yes')->get() as $product)
                <div class="col-md-4 bg-danger-rm border-rm border-danger-rm">
                  <a href="{{ route('website-product-view', [$product->product_id, str_replace(" ", "-", $product->name)]) }}"
                      class="text-decoration-none">
                    <div class="card h-100 shadow-rm border-0-rm border-rm border-0">
      
                      @if (true)
                      <div class="d-flex flex-column justify-content-between h-100 bg-success-rm">
                          <div class="d-flex justify-content-center bg-warning-rm">
                              @if ($product->image_path)
                                <img class="img-fluid h-25-rm w-100-rm" src="{{ asset('storage/' . $product->image_path) }}" alt="{{
                                $product->name }}" style="max-height: 150px; {{--max-width: 100px;--}}">
                              @else
                                <i class="fas fa-ellipsis-h fa-8x text-muted m-5"></i>
                              @endif
                          </div>
      
                        <div class="d-flex flex-column justify-content-end flex-grow-1 overflow-auto" style="{{-- background-color: #f5f5f5; --}}">
                          <div class="p-2">
                              <h2 class="h6 font-weight-bold mt-2 mb-2-rm text-dark text-center" style="font-family: Arial;">
                                {{ ucwords($product->name) }}
                              </h2>
                              <div class="mt-0 text-muted h6 font-weight-bold text-center">
                                @if ($product->selling_price != 0)
                                  Rs
                                  @php echo number_format( $product->selling_price ); @endphp
                                @else
                                &nbsp;
                                @endif
                              </div>
      
                          </div>
                        </div>
                      </div>
                      @endif


                    </div>
                  </a>
                </div>
            @endforeach

          </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  @endif


  {{-- Show product search --}}
  @if (false)
  <div class="container p-3 border mt-4">
    @error ('search_name')
      <div class="py-2 text-danger">
        <i class="fas fa-exclamation-circle mr-3"></i>
        Enter search name
      </div>
    @enderror
    <input type="text" class="mr-3" wire:model="search_name" placeholder="Search product"/>
    <button class="btn btn-success shadow-sm" wire:click="search">
      Go
    </button>
  </div>
  @endif

  <div>
  @if (! $modes['searchResult'])
    @if (false)
    {{-- Show products of each product category --}}
    @foreach ($productCategories as $productCategory)
      @if (count($productCategory->products) > 0 || count($productCategory->subProductCategories) > 0)
        <div class="container mt-4">
          @if (false)
          <h2 class="mb-3">
            {{ $productCategory->name }}
          </h2>
          <hr/>
          @endif
          @livewire ('ecomm-website.product-category-product-list', ['productCategory' => $productCategory,],
              key(rand() * $productCategory->product_category_id))
        </div>
      @endif
    @endforeach
    @endif


    {{--
    |
    |
    |
    |
    | Most viewed products
    |
    |
    |
    |
    --}}
    <div class="container py-5">
      <h2 class="h4 font-weight-bold mt-2 mb-1">
        Most viewed
      </h2>
      <p class="text-secondary">
        Our most viewed products
      </p>
      <div class="row bg-danger-rm">
        @foreach (\App\Product::orderBy('website_views', 'desc')->limit('3')->get() as $product)
          <div class="col-6 col-md-4 bg-danger-rm border-rm border-danger-rm">
            <a href="{{ route('website-product-view', [$product->product_id, str_replace(" ", "-", $product->name)]) }}"
                class="text-decoration-none">
              <div class="card h-100 shadow-rm border-0-rm border-rm border-0">
      
                @if (true)
                <div class="d-flex flex-column justify-content-between h-100 bg-success-rm">
                    <div class="d-flex justify-content-center bg-warning-rm">
                        @if ($product->image_path)
                          <img class="img-fluid h-25-rm w-100-rm" src="{{ asset('storage/' . $product->image_path) }}" alt="{{
                          $product->name }}" style="max-height: 150px; {{--max-width: 100px;--}}">
                        @else
                          <i class="fas fa-ellipsis-h fa-8x text-muted m-5"></i>
                        @endif
                    </div>
      
                  <div class="d-flex flex-column justify-content-end flex-grow-1 overflow-auto" style="{{-- background-color: #f5f5f5; --}}">
                    <div class="p-2">
                        <h2 class="h6 font-weight-bold mt-2 mb-2-rm text-dark text-center" style="font-family: Arial;">
                          {{ ucwords($product->name) }}
                        </h2>
                        <div class="mt-0 text-muted h6 font-weight-bold text-center">
                          @if ($product->selling_price != 0)
                            Rs
                            @php echo number_format( $product->selling_price ); @endphp
                          @else
                          &nbsp;
                          @endif
                        </div>
      
                    </div>
                  </div>
                </div>
                @endif


              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>


    {{--
    |
    |
    |
    |
    | Show all product categories
    |
    |
    |
    |
    --}}

    <div class="container py-5" id="o-all-categories">
      <h2 class="h4 font-weight-bold mt-2 mb-1">
        Categories
      </h2>
      <p class="text-secondary">
        Browse our products by category
      </p>
      <div class="row bg-danger-rm">
        @foreach ($productCategories as $productCategory)

          <div class="col-6 col-md-3 my-4">
            <div class="h-100 shadow-rm">
              {{-- Show in smaller screens --}}
              <div class="d-md-none">
              </div>
            
              {{-- Show in bigger screens --}}
              <div class="d-none-rm d-md-block-rm h-100">
                <a href="{{ route('website-product-category-product-list', [$productCategory->product_category_id, $productCategory->name]) }}"
                class="text-decoration-none">
                <div class="card h-100 shadow border-0">
            
                  <div class="d-flex flex-column justify-content-between h-100 bg-success-rm">
                      <div class="d-flex justify-content-center bg-warning-rm">
                          @if ($productCategory->image_path)
                            <img class="img-fluid h-25-rm w-100-rm" src="{{ asset('storage/' . $productCategory->image_path) }}" alt="{{ $productCategory->name }}" style="max-height: 150px; {{--max-width: 100px;--}}">
                          @else
                            <i class="fas fa-ellipsis-h fa-4x text-muted m-5"></i>
                          @endif
                      </div>
            
                    <div class="d-flex flex-column justify-content-between flex-grow-1 overflow-auto" style="">
                      <div class="pt-2">
                          <h2 class="h6 font-weight-bold mt-2 mb-2-rm text-dark text-center py-0 my-0" style="font-family: Arial;">
                            {{ ucwords($productCategory->name) }}
                          </h2>
            
                      </div>
                      <div class="py-1 px-2 pb-3 text-muted text-center">
                        Products:
                        {{ count($productCategory->products) }}
                      </div>
                    </div>

                  </div>

                </div>
                </a>
              </div>
            </div>
          </div>

        @endforeach
      </div>
    </div>

  @else
    @if (false)
    <div>
      <div class="container">
        <div class="my-3 text-scondary">
          Displaying
          {{ count($products) }}
          out of
          {{ count($products) }}
          products
        </div>
    
        @if (count($products) > 0)
          <div class="row">
            @foreach ($products as $product)
              <div class="col-md-4 mb-4">
                @livewire ('website-product-list-display', ['product' => $product,], key(rand() * $product->product_id))
              </div>
            @endforeach
          </div>
        @else
          <div class="p-2 text-secondary">
            Not found: {{ $search_name }} 
          </div>
        @endif
      </div>
    </div>
    @endif
  @endif
  </div>


  {{--
  |
  |
  |
  |
  | Testimonials
  |
  |
  |
  |
  --}}

  @if (\App\Testimonial::count() > 0)
    <div class="container-fluid py-5 border bg-light">
      <div class="container">
        <h2 class="h4 font-weight-bold mb-4">
          What our customers say
        </h2>
        @livewire ('testimonial.website.testimonial-list')
      </div>
    </div>
  @endif


</div>
