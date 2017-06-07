<div class="container-fluid">
  @component('admin.layouts.components.aside') @endcomponent
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-lg-offset-2 col-md-offset-2 main" role='main'>
    <div style='padding:45px 15px;'>
      @yield('content')
    </div>
  </div>
</div>
