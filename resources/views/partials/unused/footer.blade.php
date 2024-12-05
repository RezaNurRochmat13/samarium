<div>

  <div class="container-fluid bg-info-rm border pt-4 pb-5-rm text-white-rm">
    <div class="container pt-4">
      <div class="row">
      
        <div class="col-md-3 text-secondary mb-5" style="">
          <h3 class="h4 text-dark font-weight-bold mb-4">
            ABOUT
          </h3>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-about-us') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              About us
            </a>
          </div>
          <div class="mb-2">
            <a href=""
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Contact us
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-careers') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Careers
            </a>
          </div>
          <div class="mb-2">
            <a href=""
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Press
            </a>
          </div>
        </div>

        <div class="col-md-3 text-secondary mb-5" style="">
          <h3 class="h4 text-dark font-weight-bold mb-4">
            HELP
          </h3>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-payments') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Payments
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-shipping') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Shipping
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-cancellation-and-returns') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Cancellation and returns
            </a>
          </div>
          <div class="mb-2">
            <a href=""
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              FAQ
            </a>
          </div>
        </div>
      
        <div class="col-md-3 text-secondary mb-5" style="">
          <h3 class="h4 text-dark font-weight-bold mb-4">
            POLICY
          </h3>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-return-policy') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Return policy
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-terms-of-use') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Terms of use
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-privacy') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Privacy
            </a>
          </div>
          <div class="mb-2">
            <a href="{{ route('ecomm-collection-webpage-display-sitemap') }}"
                class="text-secondary text-decoration-none text-reset h5">
              <i class="fas fa-angle-right mr-2"></i>
              Sitemap
            </a>
          </div>
        </div>

        @if (true)
        <div class="col-md-3 mb-5">
          <div class="mb-3">
            <button class="btn btn-success badge-pill py-2 w-100">
              <span class="h5">
                <i class="fas fa-clock mr-1"></i>
                Quick service
              </span>
            </button>
          </div>
          <div class="mb-3">
            <button class="btn btn-outline-success badge-pill py-2 w-100">
              <span class="h5">
                <i class="fas fa-phone mr-1"></i>
                Call us
              </span>
            </button>
          </div>
          <div>
            @if ($company->fb_link)
              <a href="{{ $company->fb_link }}" target="_blank">
                <i class="fab fa-facebook fa-2x mr-2"></i>
              </a>
            @endif
            @if ($company->twitter_link)
              <a href="{{ $company->twitter_link }}" class="text-reset-rm" target="_blank">
                <i class="fab fa-twitter fa-2x mr-2 "></i>
              </a>
            @endif
          </div>

        </div>
        @endif
      </div>
    </div>
  </div>

  <div class="container-fluid bg-info-rm border pt-4 pb-5 text-white-rm" style="{{--background-color: #101530;--}}">
    <div class="container">
      <div class="border-top-rm text-center mt-4 pt-3" style="color: #aaa;">
        <div>
          &copy; 2023
          {{ $company->name }}
          |
          All rights reserved
        </div>
        <div>
          Website developed by
          <a href="https://oit.com.np">
            OIT
          </a>
          <i class="fas fa-check-circle ml-2"></i> 
        </div>
      </div>
    </div>
  </div>
</div>
