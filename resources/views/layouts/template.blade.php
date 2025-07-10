<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="{{asset("/dist/bootstrap/css/bootstrap.min.css")}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset("/dist/img/favicon-16x16.png")}}">

<!-- Google Font -->
<link href="{{asset("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700")}}" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset("/dist/css/style.css")}}">
<link rel="stylesheet" href="{{asset("/dist/css/font-awesome/css/font-awesome.min.css")}}">
<link rel="stylesheet" href="{{asset("/dist/css/et-line-font/et-line-font.css")}}">
<link rel="stylesheet" href="{{asset("/dist/css/themify-icons/themify-icons.css")}}">
<link rel="stylesheet" href="{{asset("/dist/css/simple-lineicon/simple-line-icons.css")}}">
<link rel="stylesheet" href="{{asset("/dist/css/skins/_all-skins.min.css")}}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="index.html" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{{asset("/dist/img/lg.png")}}" alt="Logo" style="height: 60px;"></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{{asset("/dist/img/lg.png")}}" alt="Logo" style="height: 60px;">
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 new messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left"><img src="{{asset("/dist/img/001.jpg")}}" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                    <h4>Hanif Ferdiansyah</h4>
                    <p>Memesan Kamar 001</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{asset("/dist/img/img3.jpg")}}" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">10:15 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{asset("/dist/img/img2.jpg")}}" class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">8:45 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{asset("/dist/img/img4.jpg")}}" class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">12:15 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">View All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications  -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">1:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">11:10 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/04.JPG" class="user-image" alt="User Image"> <span class="hidden-xs">Herdio Saputra</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{asset("/dist/img/04.JPG")}}" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left">Herdio Saputra <small>herdiosaputra01@gmail.com</small> </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>{{ __('Logout') }}</a></li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gear animated "></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
     
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li class="treeview"> <a href="../home"> <i class="icon-home"></i> <span>Dashboard</span> <span class="pull-right-container"></i> </span> </a>
        </li>

        <li> <a href="/pelanggan"> <i class="icon-people"></i> <span>Pelanggan</span> <span class="pull-right-container"> </i> </span> </a>
        </li>

        <li> <a href="/kamar"> <i class="ti-layout-sidebar-left"></i> <span>Kamar</span> <span class="pull-right-container"></i> </span> </a>
        </li>

        <li> <a href="/pemesanan"> <i class="fa fa-shopping-cart"></i> <span>Pemesanan</span> <span class="pull-right-container"> </i> </span> </a>
        </li>

        <li> <a href="/pembayaran"> <i class="fa fa-money"></i> <span>Pembayaran</span> <span class="pull-right-container"> </i> </span> </a>
        </li>
        

    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>@yield('headline')</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> <a href="#">Pages</a></li>
        <li><i class="fa fa-angle-right"></i> Blank page</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      @yield('content')
      {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                Selamat Datang di Website Kami <br>
Terima kasih telah berkunjung. Temukan berbagai informasi dan layanan terbaik yang kami sediakan untuk Anda.
                            </div>
                        </div>
                    </div>
                </div> --}}
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2025 Yourdomian. All rights reserved.</footer>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{{asset("/dist/js/jquery.min.js")}}"></script>  
<script src="{{asset("/dist/bootstrap/js/bootstrap.min.js")}}"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- template --> 
<script src="{{asset("/dist/js/bizadmin.js")}}"></script> 

<!-- for demo purposes --> 
{{-- <script src="{{asset("/dist/js/demo.js")}}"></script> --}}
<!--Start of Tawk.to Script-->
<script type="{{asset("/text/javascript")}}">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
