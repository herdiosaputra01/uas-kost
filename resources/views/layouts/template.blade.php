<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Biz Admin Dashboard Template by uxliner.">
  <meta name="keywords" content="admin, dashboard, crm, template, responsive, bootstrap">
  <meta name="author" content="uxliner">

  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dist/img/favicon-16x16.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Dependencies -->
  <link rel="stylesheet" href="{{ asset('/dist/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/et-line-font/et-line-font.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/simple-lineicon/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper boxed-wrapper">

    <!-- Header -->
    <header class="main-header">
      <a href="/dashboard" class="logo d-flex align-items-center justify-content-center bg-primery px-3 py-2" style="height: 70px;">
        <span class="logo-mini d-md-none">
          <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo Mini" style="height: 40px;">
        </span>
        <span class="logo-lg d-none d-md-block">
          <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo Besar" style="height: 50px;">
        </span>
      </a>

      <nav class="navbar navbar-expand-lg navbar-blue bg-primery shadow-sm py-2 px-3 sticky-top">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link sidebar-toggle text-white" href="#"><i class="fa fa-bars"></i></a>
          </li>
        </ul>

        <div class="navbar-custom-menu d-flex align-items-center ms-auto">
          <!-- Messages -->
          <div class="nav-item dropdown me-3">
            <a class="nav-link text-white position-relative" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-envelope fa-lg"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li class="dropdown-header fw-bold">4 Pesan Baru</li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item d-flex align-items-center" href="#">
                <img src="{{ asset('/dist/img/001.jpg') }}" alt="User" class="rounded-circle me-2" width="40">
                <div>
                  <div class="fw-semibold">Hanif Ferdiansyah</div>
                  <small>Memesan Kamar 001</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="#">
                <img src="{{ asset('/dist/img/img3.jpg') }}" class="rounded-circle me-2" width="40">
                <div>
                  <div class="fw-semibold">Nikolaj S. Henriksen</div>
                  <small>See you soon...</small>
                </div>
              </a></li>
              <li class="dropdown-footer text-center mt-2"><a href="#" class="text-decoration-none">Lihat Semua Pesan</a></li>
            </ul>
          </div>

          <!-- Notifications -->
          <div class="nav-item dropdown me-3">
            <a class="nav-link text-white position-relative" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-bell fa-lg"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li class="dropdown-header fw-bold">Notifikasi</li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item d-flex align-items-center" href="#">
                <div class="icon-circle bg-danger text-white me-2"><i class="fa fa-tasks"></i></div>
                <div>
                  <div class="fw-semibold">Alex C. Patton</div>
                  <small>Completed the task</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="#">
                <div class="icon-circle bg-primary text-white me-2"><i class="fa fa-coffee"></i></div>
                <div>
                  <div class="fw-semibold">Nikolaj Henriksen</div>
                  <small>Update pending</small>
                </div>
              </a></li>
              <li class="dropdown-footer text-center mt-2"><a href="#" class="text-decoration-none">Lihat Semua Notifikasi</a></li>
            </ul>
          </div>

          <!-- User Menu -->
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" data-bs-toggle="dropdown">
              <img src="{{ asset('/dist/img/04.JPG') }}" alt="User" class="rounded-circle me-2" width="35">
              <span class="d-none d-md-inline">Herdio Saputra</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li class="dropdown-item text-center">
                <img src="{{ asset('/dist/img/04.JPG') }}" class="rounded-circle mb-2" width="60">
                <div class="fw-semibold">Herdio Saputra</div>
                <small class="text-muted">herdiosaputra01@gmail.com</small>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-user me-2"></i> Profil</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-wallet me-2"></i> Saldo Saya</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-envelope me-2"></i> Kotak Masuk</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i> Pengaturan Akun</a></li>
              <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt me-2"></i> Keluar
              </a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Sidebar -->
    <aside class="main-sidebar bg-dark text-white" style="min-height: 100vh;">
      <div class="sidebar p-3">
        <div class="mb-4 text-center">
          <h5 class="fw-bold">Admin Panel</h5>
          <hr class="border-light">
        </div>
        <ul class="nav flex-column sidebar-menu" data-widget="tree">
          <li class="nav-item mb-2">
            <a href="/dashboard" class="nav-link text-white d-flex align-items-center gap-2">
              <i class="icon-home fs-5"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="/pelanggan" class="nav-link text-white d-flex align-items-center gap-2">
              <i class="icon-people fs-5"></i> <span>Pelanggan</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="/kamar" class="nav-link text-white d-flex align-items-center gap-2">
              <i class="ti-layout-sidebar-left fs-5"></i> <span>Kamar</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="/pemesanan" class="nav-link text-white d-flex align-items-center gap-2">
              <i class="fa fa-shopping-cart fs-5"></i> <span>Pemesanan</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="/pembayaran" class="nav-link text-white d-flex align-items-center gap-2">
              <i class="fa fa-money fs-5"></i> <span>Pembayaran</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <div class="content">
        @yield('content')
      </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">Version 1.0</div>
      &copy; 2025 Yourdomain. All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <div class="tab-content">
        <div class="tab-pane" id="control-sidebar-home-tab"></div>
      </div>
    </aside>

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('/dist/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/dist/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/dist/js/bizadmin.js') }}"></script>

  <!-- Tawk.to Live Chat -->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Biz Admin Dashboard Template by uxliner.">
  <meta name="keywords" content="admin, dashboard, crm, template, responsive, bootstrap">
  <meta name="author" content="uxliner"> --}}

  <!-- Favicon -->
  {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dist/img/favicon-16x16.png') }}"> --}}

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> --}}

  <!-- CSS Dependencies -->
  {{-- <link rel="stylesheet" href="{{ asset('/dist/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/et-line-font/et-line-font.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/simple-lineicon/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}"> --}}

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
{{-- </head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper"> --}}

  <!-- Header -->
  {{-- <header class="main-header">
    <a href="/dashboard" class="logo d-flex align-items-center justify-content-center bg-primery px-3 py-2" style="height: 70px;">
    <span class="logo-mini d-md-none">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo Mini" style="height: 40px;">
    </span>
    <span class="logo-lg d-none d-md-block">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo Besar" style="height: 50px;">
    </span>
  </a> --}}

    {{-- <a href="/dashboard" class="logo blue-bg">
      <span class="logo-mini">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo" style="height: 60px;">
      </span>
      <span class="logo-lg">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo" style="height: 60px;">
      </span>
    </a> --}}

    {{-- <nav class="navbar navbar-expand-lg navbar-blue bg-primery shadow-sm py-2 px-3 sticky-top">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link sidebar-toggle text-white" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <div class="navbar-custom-menu d-flex align-items-center ms-auto"> --}}
        <!-- Messages -->
        {{-- <div class="nav-item dropdown me-3">
            <a class="nav-link text-white position-relative" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fa fa-envelope fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li class="dropdown-header fw-bold">4 Pesan Baru</li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <img src="{{ asset('/dist/img/001.jpg') }}" alt="User" class="rounded-circle me-2" width="40">
                    <div>
                        <div class="fw-semibold">Hanif Ferdiansyah</div>
                        <small>Memesan Kamar 001</small>
                    </div>
                </a></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <img src="{{ asset('/dist/img/img3.jpg') }}" class="rounded-circle me-2" width="40">
                    <div>
                        <div class="fw-semibold">Nikolaj S. Henriksen</div>
                        <small>See you soon...</small>
                    </div>
                </a></li>
                <li class="dropdown-footer text-center mt-2"><a href="#" class="text-decoration-none">Lihat Semua Pesan</a></li>
            </ul>
        </div> --}}

        <!-- Notifications -->
        {{-- <div class="nav-item dropdown me-3">
            <a class="nav-link text-white position-relative" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fa fa-bell fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li class="dropdown-header fw-bold">Notifikasi</li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="icon-circle bg-danger text-white me-2"><i class="fa fa-tasks"></i></div>
                    <div>
                        <div class="fw-semibold">Alex C. Patton</div>
                        <small>Completed the task</small>
                    </div>
                </a></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="icon-circle bg-primary text-white me-2"><i class="fa fa-coffee"></i></div>
                    <div>
                        <div class="fw-semibold">Nikolaj Henriksen</div>
                        <small>Update pending</small>
                    </div>
                </a></li>
                <li class="dropdown-footer text-center mt-2"><a href="#" class="text-decoration-none">Lihat Semua Notifikasi</a></li>
            </ul>
        </div> --}}

        <!-- User Menu -->
        {{-- <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('/dist/img/04.JPG') }}" alt="User" class="rounded-circle me-2" width="35">
                <span class="d-none d-md-inline">Herdio Saputra</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li class="dropdown-item text-center">
                    <img src="{{ asset('/dist/img/04.JPG') }}" class="rounded-circle mb-2" width="60">
                    <div class="fw-semibold">Herdio Saputra</div>
                    <small class="text-muted">herdiosaputra01@gmail.com</small>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-user me-2"></i> Profil</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-wallet me-2"></i> Saldo Saya</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-envelope me-2"></i> Kotak Masuk</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i> Pengaturan Akun</a></li>
                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt me-2"></i> Keluar
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </ul>
        </div>
    </div>
</nav> --}}


    {{-- <nav class="navbar blue-bg navbar-static-top">
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a></li>
      </ul>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Messages Dropdown -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 new messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#"><div class="pull-left"><img src="{{ asset('/dist/img/001.jpg') }}" class="img-circle" alt="User"></div><h4>Hanif Ferdiansyah</h4><p>Memesan Kamar 001</p></a></li>
                  <li><a href="#"><div class="pull-left"><img src="{{ asset('/dist/img/img3.jpg') }}" class="img-circle" alt="User"></div><h4>Nikolaj S. Henriksen</h4><p>See you soon...</p></a></li>
                  <li><a href="#"><div class="pull-left"><img src="{{ asset('/dist/img/img2.jpg') }}" class="img-circle" alt="User"></div><h4>Kasper S. Jessen</h4><p>See you soon...</p></a></li>
                  <li><a href="#"><div class="pull-left"><img src="{{ asset('/dist/img/img4.jpg') }}" class="img-circle" alt="User"></div><h4>Florence S. Kasper</h4><p>See you soon...</p></a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">View All Messages</a></li>
            </ul>
          </li>

          <!-- Notifications Dropdown -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#"><div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div><h4>Alex C. Patton</h4><p>Completed the task</p></a></li>
                  <li><a href="#"><div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div><h4>Nikolaj Henriksen</h4><p>Update pending</p></a></li>
                  <li><a href="#"><div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div><h4>Kasper Jessen</h4><p>Uploaded files</p></a></li>
                  <li><a href="#"><div class="pull-left icon-circle yellow"><i class="fa fa-plane"></i></div><h4>Florence Kasper</h4><p>Booked a flight</p></a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>

          <!-- User Menu -->
          <li class="dropdown user user-menu p-ph-res">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/04.JPG') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Herdio Saputra</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header text-left">
                <div class="pull-left user-img">
                  <img src="{{ asset('/dist/img/04.JPG') }}" class="img-circle" alt="User">
                </div>
                <p>Herdio Saputra <small>herdiosaputra01@gmail.com</small></p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa fa-power-off"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </li>
            </ul>
          </li>

          <!-- Settings -->
          <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gear animated"></i></a></li>
        </ul>
      </div>
    </nav> --}}
  {{-- </header> --}}

  <!-- Sidebar -->
{{-- <aside class="main-sidebar bg-dark text-white" style="min-height: 100vh;">
    <div class="sidebar p-3">
        <div class="mb-4 text-center">
            <h5 class="fw-bold">Admin Panel</h5>
            <hr class="border-light">
        </div>
        <ul class="nav flex-column sidebar-menu" data-widget="tree">
            <li class="nav-item mb-2">
                <a href="/dashboard" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="icon-home fs-5"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/pelanggan" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="icon-people fs-5"></i> <span>Pelanggan</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/kamar" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="ti-layout-sidebar-left fs-5"></i> <span>Kamar</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/pemesanan" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="fa fa-shopping-cart fs-5"></i> <span>Pemesanan</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/pembayaran" class="nav-link text-white d-flex align-items-center gap-2">
                    <i class="fa fa-money fs-5"></i> <span>Pembayaran</span>
                </a>
            </li>
        </ul>
    </div>
</aside> --}}


  {{-- <aside class="main-sidebar">
    <div class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/dashboard"><i class="icon-home"></i><span>Dashboard</span></a></li>
        <li><a href="/pelanggan"><i class="icon-people"></i><span>Pelanggan</span></a></li>
        <li><a href="/kamar"><i class="ti-layout-sidebar-left"></i><span>Kamar</span></a></li>
        <li><a href="/pemesanan"><i class="fa fa-shopping-cart"></i><span>Pemesanan</span></a></li>
        <li><a href="/pembayaran"><i class="fa fa-money"></i><span>Pembayaran</span></a></li>
      </ul>
    </div>
  </aside> --}}

  <!-- Content Wrapper -->
  {{-- <div class="content-wrapper">
    <div class="content">
      @yield('content')
    </div>
  </div> --}}

  <!-- Footer -->
  {{-- <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    &copy; 2025 Yourdomain. All rights reserved.
  </footer> --}}

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>
</div> --}}

<!-- Scripts -->
{{-- <script src="{{ asset('/dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('/dist/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/dist/js/bizadmin.js') }}"></script> --}}

<!-- Tawk.to Live Chat -->
{{-- <script type="text/javascript">
var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function(){
  var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
  s1.charset = 'UTF-8';
  s1.setAttribute('crossorigin', '*');
  s0.parentNode.insertBefore(s1, s0);
})();
</script>
</body>
</html> --}}
