<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothing - Contact Us</title>

    <!-- Laravel core CSS -->
    <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('custom_public/css/modern-business.css')); ?>" rel="stylesheet">

  </head>

  <body>
      <?php if(session()->has('message')): ?>
      <div class="alert alert-success text-center" id="msgdiv" role="alert">
          <strong><?php echo e(session()->get('message')); ?></strong>
      </div>
      <?php endif; ?>

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
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item active">
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
      <h1 class="mt-4 mb-3">Contact
        <small>Clothing.com</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
        <h3>Send us a Message</h3>
          <form action="/contactus" method="post" name="sentMessage" id="contactForm" novalidate>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required data-validation-required-message="Please enter your name.">
                <small id="fullnameHelp" class="text-danger"></small>
                
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="pnumber" name="pnumber" required data-validation-required-message="Please enter your phone number.">
                <small id="pnumberHelp" class="text-danger"></small>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                <small id="emailHelp" class="text-danger"></small>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message"
                name="message" required data-validation-required-message="Please enter your message" maxlength="255" style="resize:none"></textarea>
                <small id="messageHelp" class="text-danger"></small>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <?php if(Session::has('admin')): ?>
            <?php else: ?>
            <input class="btn btn-primary" type="submit" id="sendMessageButton" value="Send Message" />
            <?php endif; ?>
            
          </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            Block -D House No: 9, Sector 7, Uttara
            <br>Dhaka, Bangladesh
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (880) 1744-692979
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">eshop@clothing.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Saturday - Friday: 10:00 AM to 9:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">

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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo e(asset('custom_public/js/jqBootstrapValidation.js')); ?>"></script>
    

    <script src="<?php echo e(asset('custom_public/contactus-validate.js')); ?>"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('#msgdiv').fadeOut('slow'); //fast
      }, 5000);

      setTimeout(function() {
          $('#errdiv').fadeOut('slow'); //fast
      }, 5000);
    </script>

  </body>

</html>
