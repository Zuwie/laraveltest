@include('layouts.header')
<div class="container">
  <div class="row">

    <div class="col-xl-8 col-md-12">
      @yield('content')
    </div>
    
    @include('layouts.sidepanel')
  </div>
</div>

@include('layouts.footer')