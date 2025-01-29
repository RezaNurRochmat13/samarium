<div class="bg-dark text-white o-heading-rm py-1 px-3">
  <small>
  Admin panel
  </small>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0">
  <a class="navbar-brand p-3 text-reset" href="{{ route('dashboard') }}" style="">
    <button class="p-3 m-3 border text-white" type="button">
      <i class="fas fa-home fa-2x"></i>
    </button>
  </a>
  <button class="navbar-toggler p-3 m-3 border text-white" style="" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-list fa-2x"></i>
  </button>

  <div class="collapse navbar-collapse m-0 p-0 mt-4" id="navbarSupportedContent" style="margin-left: 0;">
    <ul class="navbar-nav m-0 p-0 mr-auto-rm" style="margin: auto;">

      {{-- Product options --}}
      @if (has_module('product'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuProductDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-dice-d6 text-secondry mr-3"></i>
            <span class="font-weight-bold">
            Product
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuProductDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('product') }}" style="background-color: #ddd;">
              <i class="fas fa-dice-d6 mr-3"></i>
              Products
            </a>

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('product-category') }}" style="background-color: #ddd;">
              <i class="fas fa-list mr-3"></i>
              Product category
            </a>

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('product-question') }}" style="background-color: #ddd;">
              <i class="fas fa-question mr-3"></i>
              Product question
            </a>

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-inventory') }}" style="background-color: #ddd;">
              <i class="fas fa-dolly mr-3"></i>
              Inventory
            </a>

          </div>
        </li>
      @endif


      {{-- Shop options --}}
      @if (has_module('shop'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuShopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-cart text-secondry mr-3"></i>
            <span class="font-weight-bold">
            Shop
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuShopDropdown">
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('sale') }}">
              @if (config('app.cmp_type') === 'cafe')
                <i class="fas fa-skating mr-3"></i>
                Takeaway
              @else
                <i class="fas fa-dice-d6 mr-3"></i>
                Sales
              @endif
            </a>

            @if (config('app.cmp_type') === 'cafe')
              <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('cafesale') }}">
                <i class="fas fa-table mr-3"></i>
                Tables
              </a>
            @endif

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-purchase') }}">
              <i class="fas fa-shopping-cart mr-3"></i>
              Purchase
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-expense') }}">
              <i class="fas fa-wrench mr-3"></i>
              Expense
            </a>

            @if (true)
            <div class="dropdown-divider"></div>
            @endif

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('customer') }}">
              <i class="fas fa-users mr-3"></i>
              Customers
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-vendor') }}">
              <i class="fas fa-users mr-3"></i>
              Vendors
            </a>

            @if (true)
            <div class="dropdown-divider"></div>
            @endif
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('online-order') }}">
              <i class="fas fa-cloud-download-alt mr-3"></i>
              Weborder
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-sale-quotation') }}">
              <i class="fas fa-edit mr-3"></i>
              Quotation
            </a>

          </div>
        </li>
      @endif


      {{-- CMS options --}}
      @if (has_module('cms'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuCmsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-edit text-secondry mr-3"></i>
            <span class="font-weight-bold">
            CMS
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuCmsDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-cms-post') }}">
              <i class="fas fa-edit mr-3"></i>
              Post
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-cms-webpage') }}">
              <i class="fas fa-file mr-3"></i>
              Page
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-cms-gallery') }}">
              <i class="fas fa-images mr-3"></i>
              Gallery
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-cms-nav-menu') }}">
              <i class="fas fa-list mr-3"></i>
              Nav menu
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-cms-theme') }}">
              <i class="fas fa-palette mr-3"></i>
              Appearence
            </a>

          </div>
        </li>
      @endif


      {{-- Calendar options --}}
      @if (has_module('school'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuCalendarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar text-secondry mr-3"></i>
            <span class="font-weight-bold">
            Calendar
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuCalendarDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-school-calendar') }}">
              <i class="fas fa-calendar mr-3"></i>
              Calendar
            </a>

          </div>
        </li>
      @endif


      {{-- Team options --}}
      @if (has_module('team'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuTeamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar text-secondry mr-3"></i>
            <span class="font-weight-bold">
            Team
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuTeamDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-team') }}">
              <i class="fas fa-calendar mr-3"></i>
              Team
            </a>

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-quick-contacts') }}">
              <i class="fas fa-calendar mr-3"></i>
              Quick contacts
            </a>

          </div>
        </li>
      @endif


      {{-- Report options --}}
      @if (has_module('report'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuReportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-dice-d6 text-secondry mr-3"></i>
            <span class="font-weight-bold">
            Report
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuReportDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('daybook') }}">
              <i class="fas fa-book mr-3"></i>
              Daybook
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('weekbook') }}">
              <i class="fas fa-book mr-3"></i>
              Weekbook
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-report') }}">
              <i class="fas fa-chart-line text-secondary mr-3"></i>
              Report
            </a>

          </div>
        </li>
      @endif


      {{-- CRM options --}}
      @if (has_module('crm'))
        <li class="nav-item dropdown bg-light text-dark p-3-rm border">
          <a class="nav-link dropdown-toggle text-dark p-3 py-4" href="#" id="mobTopMenuCrmDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-users text-secondry mr-3"></i>
            <span class="font-weight-bold">
            CRM
            </span>
          </a>
          <div class="dropdown-menu p-0 border-danger-rm" aria-labelledby="mobTopMenuCrmDropdown">

            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-contact-form') }}">
              <i class="fas fa-comment mr-3"></i>
              Contact message
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-appointment') }}">
              <i class="fas fa-paste mr-3"></i>
              Appointment
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-newsletter-subscription') }}">
              <i class="fas fa-envelope mr-3"></i>
              Newsletter subscription
            </a>
            <a class="dropdown-item py-3 pl-3 font-weight-bold" href="{{ route('dashboard-testimonial') }}">
              <i class="fas fa-comment mr-3"></i>
              Testimonial
            </a>

          </div>
        </li>
      @endif

      {{-- Project options --}}
      @if (has_module('project'))
        <li class="nav-item border bg-light text-dark p-3">
          <a class="nav-link text-dark" href="{{ route('dashboard-todo') }}">
            <i class="fas fa-list mr-3"></i>
            <span class="font-weight-bold">
            Tasks
            </span>
          </a>
        </li>
      @endif

      {{-- HR options --}}
      @if (has_module('hr'))
        <li class="nav-item border bg-light text-dark p-3">
          <a class="nav-link text-dark" href="{{ route('dashboard-vacancy') }}">
            <i class="fas fa-users mr-3"></i>
            <span class="font-weight-bold">
            Vacancy
            </span>
          </a>
        </li>
      @endif

      {{-- Common things --}}
      <li class="nav-item dropdown bg-light text-dark p-3 border">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="mobTopMenuMoreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog text-secondry mr-2"></i>
          <span class="font-weight-bold">
          More
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="mobTopMenuMoreDropdown">
          <a class="dropdown-item py-3" href="{{ route('company') }}">
            <i class="fas fa-home text-secondary mr-2"></i>
            Company
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item py-3" href="{{ route('dashboard-settings') }}">
            <i class="fas fa-cog text-secondary mr-2"></i>
            Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item py-3" href="{{ route('dashboard-users') }}">
            <i class="fas fa-users text-secondary mr-2"></i>
            Users
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item py-3" href="{{ route('dashboard-help') }}">
            <i class="fas fa-question-circle text-secondary mr-2"></i>
            Help
          </a>
        </div>
      </li>


      {{-- Logout and other user related options --}}
      @guest
      @else
        <li class="nav-item border bg-light text-dark p-3">
          <a class="nav-link text-dark" href="/">
            <span class="btn btn-success badge-pill">
            Website
            </span>
          </a>
        </li>
        <li class="nav-item dropdown bg-light text-dark p-3 border">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="mobTopMenuDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cog text-secondry mr-2"></i>
            <span class="font-weight-bold">
            {{ Auth::user()->name }}
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="mobTopMenuDropdown2">
            <a class="dropdown-item py-3" href="{{ route('dashboard-change-password') }}">
              <i class="fas fa-key text-secondary mr-2"></i>
              Change password
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item py-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
            >
              <i class="fas fa-power-off mr-2 text-danger font-weight-bold"></i>
              <span class="text-danger font-weight-bold">
              Logout
            </a>
          </div>
        </li>
      @endguest

    </ul>
  </div>
</nav>
