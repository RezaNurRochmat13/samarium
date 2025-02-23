{{--
|
| Show this when company is not set.
|
| This is shown when no company is created in database.
|
--}}

<div class="d-flex justify-content-center bg-light text-dark p-3 pt-5 pt-md-3">
  <div>
    <h1>
      <strong>Samarium ERP</strong>
    </h1>
    <p>
      ERP| CMS | Ecommerce
    </p>
  </div>
</div>

<div class="d-flex justify-content-center h-100">
  <div class="d-flex flex-column justify-content-center h-100">
    <div class="p-3">
      <div class="p-3 text-center border shadow" style="background-color: #eaeaea;">

        {{--
        |
        | Company not set message
        |
        --}}
        <h2 class="h4 text-danger">
          <i class="fas fa-exclamation-circle mr-1"></i>
          Company not set
        </h2>
        <p class="text-secondary">
          Please start by creating your company in dashboard.
        </p>

        {{--
        |
        | Link to dashboard
        |
        --}}
        <h3 class="h5 font-weight-bold">
          <a href="./dashboard" class="btn btn-success px-3">
            Visit dashboard
          </a>
        </h3>
      </div>

      {{--
      |
      | Display date
      |
      --}}
      <div class="my-4 text-center text-secondary p-3">
        <h3 class="h6">
          {{ date('Y M d') }}
        </h3>
      </div>
    </div>
  </div>
</div>
