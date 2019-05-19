<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clothing -> Login</title>
    
    <!-- Laravel core CSS -->
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->

    <!-- Bootstrap core CSS-->
    <link href="{{asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('custom_public/css/sb-admin.css')}}" rel="stylesheet">
    <style>
        body {
            background: url(custom_public/images/login.jpeg) no-repeat 0px 0px;
            background-size: cover;
            font-family: "Roboto", sans-serif;
        }

    </style>
</head>

<body class="bg-dark">

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"> Clothing </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          @if(session()->has('message'))
          <div class="alert alert-success text-center mzs-alert-div">
              <strong>{{ session()->get('message') }}</strong>
          </div>
          @endif
          @if($errors->any())
          <div class="alert alert-danger text-center mzs-alert-div">
              <strong>{{ $errors->first() }}</strong>
          </div>
          @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clothes & Dresses
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
          <a class="dropdown-item" href="/allclothings">All Clothings</a>
          <a class="dropdown-item" href="/mensclothing">Men's Clothing</a>
          <a class="dropdown-item" href="/womensclothing">Women's Clothing</a>
          <a class="dropdown-item" href="/childsclothing">Child's Clothing</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="card card-login mx-auto mt-5 pt-md-2">
            <div class="card-header"><strong>Login</strong></div>
            <div class="card-body">
                <form method="post" action="/login" id="login">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="usernameEmail">Username / Email address</label>
                        <input class="form-control" id="usernameEmail" type="text" aria-describedby="emailHelp" placeholder="Enter username / email" name="usernameEmail" value="{{old('usernameEmail')}}">
                        @if($errors->has('userDNE'))
                          <small id="userDNE" class="text-danger">{{ $errors->first('userDNE') }}</small>
                        @endif
                        <small id="usernameEmailHelp" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" type="password" placeholder="Enter Password" name="password">
                        @if($errors->has('pwdERR'))
                          <small id="pwdERR" class="text-danger">{{ $errors->first('pwdERR') }}</small>
                        @endif
                        <small id="passwordHelp" class="text-danger"></small>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Login" />
                    <!--<a class="btn btn-primary btn-block" href="index.html">Login</a>-->
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="/register">Register an Account</a>
                    {{-- <a class="d-block small" href="#">Forgot Password?</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('custom_public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom plugin JavaScript-->
    <script src="{{asset('custom_public/login-validate.js')}}"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('.mzs-alert-div').fadeOut('slow'); //fast
      }, 5000);
    </script>
</body>

</html>
