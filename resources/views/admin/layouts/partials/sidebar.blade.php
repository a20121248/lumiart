<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link text-center">
    <img src="{{ asset('storage/logos/light.png') }}" alt="LumiArt Logo" class="brand-image elevation-3" style="opacity: .8">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('storage/images/users/user7-128x128.jpg') }}" class="img-circle elevation-2" alt="Mariela de la Cruz">
      </div>
      <div class="info">
        <a href="{{ route('admin.users.profile') }}" class="d-block">Mariela de la Cruz</a>
      </div>

      {{--<div class="info">
        <div class="dropdown">
          <a href="#" class="dropdown-toggle d-block" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Mariela de la Cruz</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>--}}
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">DATOS GENERALES</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {!! Route::is('admin.dashboard') ? 'active' : '' !!}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.settings') }}" class="nav-link {!! Route::is('admin.settings') ? 'active' : '' !!}">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Configuraciones
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.catalog') }}" class="nav-link {!! Route::is('admin.catalog') ? 'active' : '' !!}">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Catálogo
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.contact') }}" class="nav-link {!! Route::is('admin.contact') ? 'active' : '' !!}">
            <i class="nav-icon fas fa-phone-square"></i>
            <p>
              Contacto
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.images') }}" class="nav-link {!! Route::is('admin.images') ? 'active' : '' !!}">
            <i class="nav-icon far fa-image"></i>
            <p>
              Imágenes
            </p>
          </a>
        </li>
        <li class="nav-header">MANTENIMIENTOS</li>
        <li class="nav-item {!! Request::is('admin/clientes*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/clientes*') ? 'active' : null !!}">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Clientes
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.clients.index') }}" class="nav-link {!! Request::is('admin/clientes*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {!! Request::is('admin/usuarios*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/usuarios*') ? 'active' : null !!}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Usuarios
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.users.index') }}" class="nav-link {!! Request::is('admin/usuarios*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {!! Request::is('admin/marcas*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/marcas*') ? 'active' : null !!}">
            <i class="nav-icon fas fa-copyright"></i>
            <p>
              Marcas
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.brands.index') }}" class="nav-link {!! Request::is('admin/marcas*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {!! Request::is('admin/productos*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/productos*') ? 'active' : null !!}">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Productos
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.products.index') }}" class="nav-link {!! Request::is('admin/productos*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {!! Request::is('admin/proyectos*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/proyectos*') ? 'active' : null !!}">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              Proyectos
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.projects.index') }}" class="nav-link {!! Request::is('admin/proyectos*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {!! Request::is('admin/proveedores*') ? 'menu-open' : null !!}">
          <a href="#" class="nav-link {!! Request::is('admin/proveedores*') ? 'active' : null !!}">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Proveedores
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.suppliers.index') }}" class="nav-link {!! Request::is('admin/proveedores*') ? 'active' : null !!}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>