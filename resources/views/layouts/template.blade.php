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

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dist/img/favicon-16x16.png') }}">

  <!-- Google Fonts -->
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
    <a href="/dashboard" class="logo blue-bg">
      <span class="logo-mini">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo" style="height: 60px;">
      </span>
      <span class="logo-lg">
        <img src="{{ asset('/dist/img/lg.png') }}" alt="Logo" style="height: 60px;">
      </span>
    </a>

    <nav class="navbar blue-bg navbar-static-top">
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
    </nav>
  </header>

  <!-- Sidebar -->
  <aside class="main-sidebar">
    <div class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/dashboard"><i class="icon-home"></i><span>Dashboard</span></a></li>
        <li><a href="/pelanggan"><i class="icon-people"></i><span>Pelanggan</span></a></li>
        <li><a href="/kamar"><i class="ti-layout-sidebar-left"></i><span>Kamar</span></a></li>
        <li><a href="/pemesanan"><i class="fa fa-shopping-cart"></i><span>Pemesanan</span></a></li>
        <li><a href="/pembayaran"><i class="fa fa-money"></i><span>Pembayaran</span></a></li>
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
</html>
