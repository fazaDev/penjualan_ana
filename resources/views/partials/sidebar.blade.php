<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Nama Tokonya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pelanggan.index')}}" class="nav-link {{ (request()->is('admin/pelanggan*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pelanggan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kategori.index')}}" class="nav-link {{ (request()->is('admin/kategori*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('buku.index')}}" class="nav-link {{ (request()->is('admin/buku*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('barang.index')}}" class="nav-link {{ (request()->is('admin/barang*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pembelian.index')}}" class="nav-link {{ (request()->is('admin/pembelian*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Pembelian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('penjualan.index')}}" class="nav-link {{ (request()->is('admin/penjualan*')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>