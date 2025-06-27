<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="{{asset("/dist/bootstrap/css/bootstrap.min.css")}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset("dist/img/favicon-16x16.png")}}">

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

<body class="login-page sty1" style="background-image: url('dist/img/p.kmr.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

</head>
<body class="login-page">
<div class="login-box">
  <div class="login-box-body">
    <div class="login-logo" style="text-align: center;">
  <a href="index.html">
    <img src="dist/img/lg.png" alt="Logo" style="height: 100px;">
  </a>
</div>
    <h3 class="login-box-msg">Sign In</h3>
    <form method="POST" action="{{ route('login') }}">
                        @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div class="form-group has-feedback">
       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div>
        <div class="col-xs-8">
          <div class="d-flex justify-content-between align-items-center mb-3">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label class="form-check-label" for="remember">
      {{ __('Remember Me') }}
    </label>
  </div>
  
  <a href="{{ route('password.request') }}" class="text-primary">
    <i class="fa fa-lock"></i> Forgot Password?
  </a>
</div>

        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    <div class="social-auth-links text-center">
      
    
    <div class="m-t-2">Don't have an account? <a href="pages-register.html" class="text-center">{{ __('Login') }}</a></div>
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{{asset("/dist/js/jquery.min.js")}}"></script>  
<script src="{{asset("/dist/bootstrap/js/bootstrap.min.js")}}"></script> 

<!-- template --> 
<script src="{{asset("/dist/js/bizadmin.js")}}"></script> 

<!-- for demo purposes --> 
<script src="{{asset("/dist/js/demo.js")}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
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




{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
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

<body class="login-page sty1" style="background-image: url('dist/img/04.'); background-size: cover; background-position: center; background-repeat: no-repeat;">

</head>
<body class="login-page sty1">
<div class="login-box sty1">
  <div class="login-box-body sty1">
  <div class="login-logo">
    <a href="index.html">
  <img src="dist/img/lg.png" alt="Logo" style="height: 100px;">
</a>

  </div>
    <p class="login-box-msg">Sign in to start your session</p>
    <form method="POST" action="{{ route('login') }}">
                        @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>More actions

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            <a href="pages-recover-password.html" class="pull-right"><i class="fa fa-lock"></i> Forgot pwd?</a> </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    
  <!-- /.login-box-body --> 
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{{asset("/dist/js/jquery.min.js")}}"></script>  
<script src="{{asset("/dist/bootstrap/js/bootstrap.min.js")}}"></script> 

<!-- template --> 
<script src="{{asset("/dist/js/bizadmin.js")}}"></script> 

<!-- for demo purposes --> 
<script src="{{asset("/dist/js/demo.js")}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
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
</html> --}}


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
