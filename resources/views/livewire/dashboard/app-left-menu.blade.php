<div class="w-100">
  <div class="d-none d-md-block">
  
    <div>
    @include ('partials.dashboard.app-left-menu-button',
        [
            'btnRoute' => 'dashboard',
            'iconFaClass' => 'fas fa-tv',
            'btnText' => 'Dashboard',
            'bordered' => 'yes',
        ])
    </div>
  
    @if (has_module('product'))
      @if ($modes['product'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('product')",
            'btnIconFaClass' => 'fas fa-dice-d6',
            'btnText' => 'Product',
            'btnCheckMode' => 'product',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('product')",
            'btnIconFaClass' => 'fas fa-dice-d6',
            'btnText' => 'Product',
            'btnCheckMode' => 'product',
        ])
      @endif
  
      @if ($modes['product'])
        {{--
        |
        |
        | Product route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'product',
                  'iconFaClass' => 'fas fa-dice-d6',
                  'btnText' => 'Products',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'product-category',
                  'iconFaClass' => 'fas fa-folder-open',
                  'btnText' => 'Product category',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'product-vendor',
                  'iconFaClass' => 'fas fa-users',
                  'btnText' => 'Product vendor',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'product-question',
                  'iconFaClass' => 'fas fa-question',
                  'btnText' => 'Product question',
              ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-inventory',
            'iconFaClass' => 'fas fa-dolly',
            'btnText' => 'Inventory',
          ])
        </div>
  
      @endif
    @endif
  
  
    @if (has_module('shop'))
      @if ($modes['shop'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('shop')",
            'btnIconFaClass' => 'fas fa-shopping-cart',
            'btnText' => 'Shop',
            'btnCheckMode' => 'shop',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('shop')",
            'btnIconFaClass' => 'fas fa-shopping-cart',
            'btnText' => 'Shop',
            'btnCheckMode' => 'shop',
        ])
      @endif
  
      @if ($modes['shop'])
        {{--
        |
        |
        | SHop route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'sale',
                  'iconFaClass' => 'fas fa-dice-d6',
                  'btnText' => 'Sales',
              ])
  
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'dashboard-purchase',
                  'iconFaClass' => 'fas fa-shopping-cart',
                  'btnText' => 'Purchase',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'dashboard-expense',
                  'iconFaClass' => 'fas fa-tools',
                  'btnText' => 'Expense',
              ])
  
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'customer',
                  'iconFaClass' => 'fas fa-users',
                  'btnText' => 'Customer',
              ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-vendor',
            'iconFaClass' => 'fas fa-users',
            'btnText' => 'Vendors',
          ])
  
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'online-order',
                  'iconFaClass' => 'fas fa-cloud-download-alt',
                  'btnText' => 'Online order',
              ])
  
          @if (config('app.has_vat') == true)
            @include ('partials.dashboard.app-left-menu-button', [
              'btnRoute' => 'dashboard-vat',
              'iconFaClass' => 'fas fa-solar-panel',
              'btnText' => 'VAT',
            ])
          @endif
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-sale-quotation',
            'iconFaClass' => 'fas fa-edit',
            'btnText' => 'Quotation',
          ])

          @if (config('app.cmp_type') === 'cafe')
            @include ('partials.dashboard.app-left-menu-button',
                [
                    'btnRoute' => 'cafesale',
                    'iconFaClass' => 'fas fa-table', 'btnText' => 'Tables', ])
          @endif
        </div>
      @endif
    @endif
  
  
    @if (has_module('cms'))
      @if ($modes['cms'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('cms')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'CMS',
            'btnCheckMode' => 'cms',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('cms')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'CMS',
            'btnCheckMode' => 'cms',
        ])
      @endif
      @if ($modes['cms'])
        {{--
        |
        |
        | CMS route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-cms-webpage',
            'iconFaClass' => 'fas fa-clone',
            'btnText' => 'Pages',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-cms-post',
            'iconFaClass' => 'fas fa-edit',
            'btnText' => 'Posts',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-cms-gallery',
            'iconFaClass' => 'fas fa-image',
            'btnText' => 'Gallery',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-cms-nav-menu',
            'iconFaClass' => 'fas fa-link',
            'btnText' => 'Nav menu',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-cms-theme',
            'iconFaClass' => 'fas fa-sliders',
            'btnText' => 'Appearence',
          ])
        </div>
      @endif
    @endif
  
  
    @if (has_module('calendar'))
  
      @if ($modes['school'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('school')",
            'btnIconFaClass' => 'fas fa-calendar',
            'btnText' => 'Calendar',
            'btnCheckMode' => 'school',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('school')",
            'btnIconFaClass' => 'fas fa-calendar',
            'btnText' => 'Calendar',
            'btnCheckMode' => 'school',
        ])
      @endif
  
      @if ($modes['school'])
  
        {{--
        |
        |
        | School route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-school-calendar',
            'iconFaClass' => 'fas fa-calendar',
            'btnText' => 'Calendar',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-calendar-group',
            'iconFaClass' => 'fas fa-users',
            'btnText' => 'Calendar group',
          ])
  
        </div>
  
      @endif
  
    @endif
  
  
    @if (has_module('team'))
  
      @if ($modes['team'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('team')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'Team',
            'btnCheckMode' => 'team',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('team')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'Team',
            'btnCheckMode' => 'team',
        ])
      @endif
  
      @if ($modes['team'])
  
        {{--
        |
        |
        | Team route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-team',
            'iconFaClass' => 'fas fa-users',
            'btnText' => 'Team',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-quick-contacts',
            'iconFaClass' => 'fas fa-users',
            'btnText' => 'Quick contacts',
          ])
        </div>
  
      @endif
  
    @endif


    @if (has_module('crm'))
  
      @if ($modes['crm'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('crm')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'CRM',
            'btnCheckMode' => 'crm',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('crm')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'CRM',
            'btnCheckMode' => 'crm',
        ])
      @endif
  
      @if ($modes['crm'])
  
        {{--
        |
        |
        | Team route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-contact-form',
            'iconFaClass' => 'fas fa-sms',
            'btnText' => 'Contact message',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-appointment',
            'iconFaClass' => 'fas fa-paste',
            'btnText' => 'Appointment',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-newsletter-subscription',
            'iconFaClass' => 'fas fa-envelope',
            'btnText' => 'Newsletter subscription',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-testimonial',
            'iconFaClass' => 'fas fa-sms',
            'btnText' => 'Testimonial',
          ])
        </div>
  
      @endif
  
    @endif
  
    @if (has_module('hr'))
  
      @if ($modes['hr'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('hr')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'HR',
            'btnCheckMode' => 'hr',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('hr')",
            'btnIconFaClass' => 'fas fa-users',
            'btnText' => 'HR',
            'btnCheckMode' => 'hr',
        ])
      @endif
  
      @if ($modes['hr'])
  
        {{--
        |
        |
        | HR route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-vacancy',
            'iconFaClass' => 'fas fa-edit',
            'btnText' => 'Vacancy',
          ])
        </div>
  
      @endif
  
    @endif
  
  
    @if (has_module('project'))
  
      @if ($modes['project'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('project')",
            'btnIconFaClass' => 'fas fa-th',
            'btnText' => 'Project',
            'btnCheckMode' => 'project',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('project')",
            'btnIconFaClass' => 'fas fa-th',
            'btnText' => 'Project',
            'btnCheckMode' => 'project',
        ])
      @endif
  
      @if ($modes['project'])
  
        {{--
        |
        |
        | Project route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-todo',
            'iconFaClass' => 'fas fa-tasks',
            'btnText' => 'Tasks',
          ])
        </div>
  
      @endif
  
    @endif
  
    @if (has_module('document'))
  
      @if ($modes['document'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('document')",
            'btnIconFaClass' => 'fas fa-folder-open',
            'btnText' => 'Document',
            'btnCheckMode' => 'document',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('document')",
            'btnIconFaClass' => 'fas fa-folder-open',
            'btnText' => 'Document',
            'btnCheckMode' => 'document',
        ])
      @endif
  
      @if ($modes['document'])
  
        {{--
        |
        |
        | Document route buttons
        |
        |
        --}}
        <div class="mb-3 border-bottom">
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-document-url-link',
            'iconFaClass' => 'fas fa-link',
            'btnText' => 'Link',
          ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-document-file',
            'iconFaClass' => 'fas fa-file',
            'btnText' => 'File',
          ])
  
        </div>
  
      @endif
  
    @endif
  
  
    @if ($modes['bgc'])
      {{--
      |
      |
      | BGC route buttons
      |
      |
      --}}
  
      @include ('partials.dashboard.app-left-menu-button', [
        'btnRoute' => 'dashboard-organizing-committee',
        'iconFaClass' => 'fas fa-users',
        'btnText' => 'Organizing committee',
      ])
  
      @include ('partials.dashboard.app-left-menu-button', [
        'btnRoute' => 'dashboard-sponsors',
        'iconFaClass' => 'fas fa-users',
        'btnText' => 'Sponsors',
      ])
    @endif
  
  
    @if (has_module('report'))
  
      @if ($modes['report'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('report')",
            'btnIconFaClass' => 'fas fa-chart-line',
            'btnText' => 'Report',
            'btnCheckMode' => 'report',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('report')",
            'btnIconFaClass' => 'fas fa-chart-line',
            'btnText' => 'Report',
            'btnCheckMode' => 'report',
        ])
      @endif
  
      @if ($modes['report'])
  
        {{--
        |
        |
        | Report route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'daybook',
                  'iconFaClass' => 'fas fa-book',
                  'btnText' => 'Daybook',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'weekbook',
                  'iconFaClass' => 'fas fa-book',
                  'btnText' => 'Weekbook',
              ])
  
          @include ('partials.dashboard.app-left-menu-button', [
            'btnRoute' => 'dashboard-report',
            'iconFaClass' => 'fas fa-chart-line',
            'btnText' => 'Report',
          ])
        </div>
  
      @endif
  
    @endif
  
  
    @if (has_module('educ'))
  
      @if ($modes['educ'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('educ')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'Education Consultancy',
            'btnCheckMode' => 'educ',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('educ')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'Education Consultancy',
            'btnCheckMode' => 'educ',
        ])
      @endif
  
      @if ($modes['educ'])
  
        {{--
        |
        |
        | Educ route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'dashboard-educ-institution',
                  'iconFaClass' => 'fas fa-building',
                  'btnText' => 'Institution',
              ])
  
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'weekbook',
                  'iconFaClass' => 'fas fa-book',
                  'btnText' => 'Program',
              ])
  
        </div>
  
      @endif

    @endif

    @if (has_module('accounting'))
  
      @if ($modes['accounting'])
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "exitMode('accounting')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'Accounting',
            'btnCheckMode' => 'accounting',
        ])
      @else
        @include ('partials.dashboard.app-left-menu-button-lw', [
            'btnClickMethod' => "enterModeSilent('accounting')",
            'btnIconFaClass' => 'fas fa-book',
            'btnText' => 'Accounting',
            'btnCheckMode' => 'accounting',
        ])
      @endif
  
      @if ($modes['accounting'])
  
        {{--
        |
        |
        | Accounting route buttons
        |
        |
        --}}
  
        <div class="mb-3 border-bottom">
          @include ('partials.dashboard.app-left-menu-button',
              [
                  'btnRoute' => 'dashboard-accounting',
                  'iconFaClass' => 'fas fa-book',
                  'btnText' => 'Accounting',
              ])
        </div>
  
      @endif

    @endif

  
    @if ($modes['more'])
      @include ('partials.dashboard.app-left-menu-button-lw', [
          'btnClickMethod' => "exitMode('more')",
          'btnIconFaClass' => 'fas fa-th-large',
          'btnText' => 'More',
          'btnCheckMode' => 'more',
      ])
    @else
      @include ('partials.dashboard.app-left-menu-button-lw', [
          'btnClickMethod' => "enterModeSilent('more')",
          'btnIconFaClass' => 'fas fa-th-large',
          'btnText' => 'More',
          'btnCheckMode' => 'more',
      ])
    @endif
  
    @if ($modes['more'])
  
      {{--
      |
      |
      | More route buttons
      |
      |
      --}}
  
      <div class="mb-3 border-bottom">
        @include ('partials.dashboard.app-left-menu-button',
            [
                'btnRoute' => 'company',
                'iconFaClass' => 'fas fa-th',
                'btnText' => 'Company',
            ])

        @include ('partials.dashboard.app-left-menu-button',
            [
                'btnRoute' => 'dashboard-users',
                'iconFaClass' => 'fas fa-users',
                'btnText' => 'Users',
            ])
      </div>
  
    @endif

  </div>
</div>
