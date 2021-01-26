<!DOCTYPE html>
<html lang="es">
  @include('app.layouts.partials.head')

  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- /End Preloader -->

    @include('app.layouts.partials.header')

    @yield('content')
    <main class="page-content">
    </main>

    @include('app.layouts.partials.footer')

    @section('scripts')
      @include('app.layouts.partials.scripts')
    @show

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>
  </body>
</html>