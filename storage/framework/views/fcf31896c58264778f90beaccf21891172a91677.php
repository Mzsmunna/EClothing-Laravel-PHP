<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothing -> Services</title>

    <!-- Laravel core CSS -->
    <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('custom_public/css/modern-business.css')); ?>" rel="stylesheet">

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
              <a class="dropdown-item" href="/mensclothing">Men's Clothing</a>
              <a class="dropdown-item" href="/womensclothing">Women's Clothing</a>
              <a class="dropdown-item" href="/childsclothing">Child's Clothing</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            <?php if(Session::has('admin')): ?>
            <li class="nav-item">
            <a class="nav-link" href="/admin"><?php echo e(Session::get('user')); ?></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            <?php elseif(Session::has('user')): ?>
            <li class="nav-item">
            <a class="nav-link" href="/user-profile/<?php echo e(Session::get('user')); ?>"><?php echo e(Session::get('user')); ?></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="/login">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Services
        <small>Clothing.com</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="custom_public/images/service2.jpg" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Our Goal:</h4>
            <div class="card-body">
              <p class="card-text">Our goal is to offer you the best shipping options, no matter where you live. Every day, we deliver to hundreds of customers across the world, ensuring that we provide the very highest levels of responsiveness to you at all times.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Processing time:</h4>
            <div class="card-body">
              <p class="card-text"> Order verification, tailoring, quality check and packaging. All orders are sent to the manufacturer for dispatch within 24 hours after the order is placed. The manufacturer and China Post process the orders, which takes an additional 2–4 days.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Shipping time:</h4>
            <div class="card-body">
              <p class="card-text"> This refers to the time it takes for items to be shipped from our warehouse to the destination.International delivery usually takes about 15–30 business days. BD orders are shipped by home delivary man or Pathao Service, which is a BD transport Service. After processing and leaving the warehouse, items usually take between 7 and 14 days to arrive at their destination but can take longer from time to time.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
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
        <p class="m-0 text-center text-white">Copyright &copy; Clothing.com 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('custom_public/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  </body>

</html>
