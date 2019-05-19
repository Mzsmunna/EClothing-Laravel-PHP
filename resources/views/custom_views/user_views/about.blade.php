<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothing -> About</title>

    <!-- Laravel core CSS -->
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="{{asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('custom_public/css/modern-business.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"> Clothing </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
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
            <li class="nav-item active">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            @if(Session::has('admin'))
            <li class="nav-item">
            <a class="nav-link" href="/admin">{{ Session::get('user')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            @elseif(Session::has('user'))
            <li class="nav-item">
            <a class="nav-link" href="/user-profile/{{ Session::get('user')}}">{{ Session::get('user')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/login">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About
        <small>Clothing.com</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="custom_public/images/aboutus2.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>About Our Business</h2>
          <p>We are Clothing.com, a small but motivated company trying to provide latest cloths & dresses to customers. We believe passionately in great bargains and excellent service, which is why we commit ourselves to giving you the best of both.</p>
          <p>If you’re looking for something new, you’re in the right place. We strive to be industrious and innovative, offering our customers something they want, putting their desires at the top of our priority list.</p>
          <p>With a motivated team, we strive to be the creative minds that bring a smile to your face. That’s why we’re always looking for innovative new ways to get the best to you.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Developing Team</h2>

      <div class="row mt-3">
        <div class="col-lg-6 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="custom_public/images/nobo.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Nabaranjan Niloy</h4>
              <h6 class="card-subtitle mb-2 text-muted">Back End Developer</h6>
              <p class="card-text">A back-end developer, has great knowledge & skills in programming and equally good in problem solving or solving a puzzle. Knows core programming languages like C++, C#, Java and equally comfortable developing PHP, Lavavel and Node.js backends. Also includes JavaScript, HTML5, CSS</p>
            </div>
            <div class="card-footer">
              <a href="#">nabaranjan.niloy@clothing.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="custom_public/images/mzs2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Mamunuz Zaman</h4>
              <h6 class="card-subtitle mb-2 text-muted">Full Stack Developer</h6>
              <p class="card-text">A novice but still a full-stack developer, comfortable developing PHP, Laravel, Node.js backends as working with JavaScript in the front-end. Also includes  ES6, HTML5, CSS, Bootstrap and a bit of some other languages & frameworks/libs.</p>
            </div>
            <div class="card-footer">
              <a href="#">mzs.munna@clothing.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Clothing 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('custom_public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
