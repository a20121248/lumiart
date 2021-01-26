<!-- Start Header Area -->
<header class="header lumiart-header">
  <div class="navbar-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg d-flex justify-content-between bd-highlight">
            <a class="navbar-brand logo" href="{{ route('home') }}">
              <img class="logo1" src="{{ asset('storage/logos/default.png') }}" alt="Logo" />
            </a>
            <div>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="{!! Route::is('home') ? 'active' : '' !!}" href="{{ route('home') }}">INICIO</a></li>
                  <li class="nav-item"><a class="{!! Route::is('about_us') ? 'active' : '' !!}" href="{{ route('about_us') }}">NOSOTROS</a></li>
                  <li class="nav-item"><a class="{!! Route::is('products') ? 'active' : '' !!}" href="{{ route('products') }}">PRODUCTOS</a>
                    <ul class="sub-menu">
                      <li><a href="404.html">Interiores</a></li>
                      <li><a href="404.html">Exteriores</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="{!! Route::is('catalog') ? 'active' : '' !!}" href="{{ route('catalog') }}">CATÁLOGO</a></li>
                  <li class="nav-item"><a class="{!! Route::is('contact_us') ? 'active' : '' !!}" href="{{ route('contact_us') }}">CONTÁCTANOS</a></li>
                </ul>
              </div>
            </div>
            <div class=navbar-icons>
              Buscar
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
          </nav>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- navbar area -->
</header>
<!-- End Header Area -->

