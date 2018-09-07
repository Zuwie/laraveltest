@include('layouts.header')
<div class="container">
  <div class="row">

    <main class="col-xl-8 col-md-12">
      @yield('content')
    </main>
    
    @include('layouts.sidepanel')
  </div>
</div>

@include('layouts.footer')