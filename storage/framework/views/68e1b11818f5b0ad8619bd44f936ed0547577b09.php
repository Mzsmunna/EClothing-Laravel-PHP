<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">-->
  <title>Clothing -> Add User</title>

  <!-- Laravel core CSS -->
  <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

  <!-- Bootstrap core CSS-->
  <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('custom_public/css/sb-admin.css')); ?>" rel="stylesheet">
      <style>
        body {
            background: url(../../../custom_public/images/reg.jpeg) no-repeat 0px 0px;
            background-size: cover;
            font-family: "Roboto", sans-serif;
        }

    </style>
</head>

<body class="bg-dark">

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/admin"> Clothing </a>
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
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
        <?php if(Session::has('user')): ?>
        <li class="nav-item">
          <a class="nav-link" href="/admin"><?php echo e(Session::get('user')); ?></a>
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

  <div class="container">
    <div class="card card-register mx-auto mt-5 pt-md-2">
      <div class="card-header"><strong>Add <?php echo e($type); ?> </strong></div>
      <div class="card-body">
        <form method="post" action="/register" enctype="multipart/form-data" id="register">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="form-group">
            <div class="form-row">
             <div class="col-md-12">
                <label for="username"><?php echo e($type); ?>name</label>
                <input class="form-control" id="username" type="text" aria-describedby="nameHelp" placeholder="Enter Username" name="username" value="<?php echo e(old('username')); ?>">
                <?php if($errors->has('userEXT')): ?>
                  <small id="userEXT" class="text-danger"><?php echo e($errors->first('userEXT')); ?></small>
                <?php endif; ?>
                <small id="usernameHelp" class="text-danger"></small>
              </div>
              <div class="col-md-6 mt-3">
                <label for="firstname">First name</label>
                <input class="form-control" id="firstname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="firstname" value="<?php echo e(old('firstname')); ?>">
                <small id="firstnameHelp" class="text-danger"></small>
              </div>
              <div class="col-md-6 mt-3">
                <label for="lastname">Last name</label>
                <input class="form-control" id="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lastname" value="<?php echo e(old('lastname')); ?>">
                <small id="lastnameHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="gender">Gender:</label>
                  <select class="form-control" id="gender" name="gender">
                    <option value="<?php echo e(old('gender', 'male')); ?>"><?php echo e(old('gender', 'Male')); ?></option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="DOB">Date of Birth</label>
                <input class="form-control" id="DOB" type="date" placeholder="Your Birth Date" name="DOB" value="<?php echo e(old('DOB')); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo e(old('email')); ?>">
                <?php if($errors->has('emailEXT')): ?>
                  <small id="emailEXT" class="text-danger"><?php echo e($errors->first('emailEXT')); ?></small>
                <?php endif; ?>
                <small id="emailHelp" class="text-danger"></small>
              </div>
              <div class="col-md-6">
                <label for="pnumber">Phone Number</label>
                <input class="form-control" id="pnumber" type="text" aria-describedby="phoneHelp" placeholder="Enter phone number" name="pnumber" value="<?php echo e(old('pnumber')); ?>">
                <small id="pnumberHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password"  name="password">
                <small id="passwordHelp" class="text-danger"></small>
              </div>
              <div class="col-md-6">
                <label for="cpassword">Confirm password</label>
                <input class="form-control" id="cpassword" type="password" placeholder="Confirm password" name="cpassword">
                <small id="cpasswordHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country">
                  <option value="<?php echo e(old('country', 'Other')); ?>"><?php echo e(old('country', 'Other')); ?></option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="India">India</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="city">City</label>
                <select class="form-control" id="city" name="city">
                  <option value="<?php echo e(old('city', 'Other')); ?>"><?php echo e(old('city', 'Other')); ?></option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="area">Area</label>
                <select class="form-control" id="area" name="area">
                  <option value="<?php echo e(old('area', 'Other')); ?>"><?php echo e(old('area', 'Other')); ?></option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="address">Address</label>
                <input class="form-control" id="address" type="text" placeholder="i.e: House# 7, Road No# 1, Block# B, Niketon" name="address" value="<?php echo e(old('address')); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="profilepic">Profile Pic</label>
                <input class="form-control" id="profilepic" type="file" name="profilepic">
              </div>
              <small id="profilepicHelp" class="text-danger"></small>
            </div>
          </div>
          <!--<a class="btn btn-primary btn-block" href="/registration">Register</a>-->
          <input type="hidden" name="acctype" value="<?php echo e($type); ?>"/>
          <input class="btn btn-primary btn-block" type="submit" value="Add <?php echo e($type); ?>" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/admin/usertable">Go Back</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(asset('custom_public/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <!-- Custom plugin JavaScript-->
  <script src="<?php echo e(asset('custom_public/register-validate.js')); ?>"></script>
</body>

</html>
