<!DOCTYPE html>
<html lang="es">
  @include('admin.layouts.partials.head')
  <body class="hold-transition sidebar-mini text-sm">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="page-head">
        @include('admin.layouts.partials.navbar')
      </header>
      @include('admin.layouts.partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@yield('title')</h1>
              </div>
              {{--<div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Página de ejemplo</li>
                </ol>
              </div>--}}
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <main class="content">
          @yield('content')
        </main>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      @include('admin.layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    @section('scripts')
      @include('admin.layouts.partials.scripts')
    @show
  </body>
</html>