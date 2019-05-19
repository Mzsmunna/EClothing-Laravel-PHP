<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">-->
  <title>Clothing -> CartList</title>

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
            background: url(custom_public/images/3.jpg) no-repeat 0px 0px;
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
        
        <li class="nav-item dropdown active">
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

  <div class="container">
    <div class="card card-register mx-auto mt-5 pt-md-2" style="max-width: 100%;">
      <div class="card-header"><strong>Cart List Items</strong></div>
      <div class="card-body">
        <?php if($allCartItems): ?>
        <form method="post" action="/checkout" enctype="multipart/form-data" id="checkout">
          <input type="hidden" name="_token" id="csrf" value="<?php echo csrf_token(); ?>">
          <input type="hidden" name="newQuantity" id="newQuantity" value=""/>
          <div class="form-group">
            <div class="form-row">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Product Name</th>
                      <th>Size</th>
                      <th>Quantiy</th>
                      <th>Price / unit</th>
                      <th>Total Price</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=1;
                    $nettotal=0;
                  ?>
                  <?php $__currentLoopData = $allCartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    if(($Item["currency"]=="Rupee")||($Item["currency"]=="RS."))
                    {
                      $nettotal += $Item["total"]*1.5;  
                    }else if(($Item["currency"]=="Taka")||($Item["currency"]=="TK."))
                    {
                      $nettotal += $Item["total"];  
                    }else if($Item["currency"]=="$")
                    {
                      $nettotal += $Item["total"]*82.71;  
                    }else if($Item["currency"]=="Euro")
                    {
                      $nettotal += $Item["total"]*94.91;  
                    } 
                  ?>
                    <tr id="<?php echo e($i); ?>">
                      <input type="hidden" name="pid" value="<?php echo e($Item["pid"]); ?>"/>
                      <input type="hidden" name="price" value="<?php echo e($Item["price"]); ?>"/>
                      <input type="hidden" name="currency" value="<?php echo e($Item["currency"]); ?>"/>
                      <input type="hidden" name="squantity" value="<?php echo e($Item["quantity"]); ?>"/>
                      <input type="hidden" name="quantityFor" value="<?php echo e($Item["quantityFor"]); ?>"/>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo e($Item["pname"]); ?></td>
                      <td><?php echo e($Item["quantityFor"]); ?></td>
                      <?php if($Item["quantityFor"]=="XS"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["xsavailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php elseif($Item["quantityFor"]=="S"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["savailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php elseif($Item["quantityFor"]=="M"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["mavailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php elseif($Item["quantityFor"]=="L"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["lavailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php elseif($Item["quantityFor"]=="XL"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["xlavailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php elseif($Item["quantityFor"]=="XXL"): ?>
                      <td><input type="number" name="quantity" min="1" max="<?php echo e($Item["xxlavailable"]); ?>" value="<?php echo e($Item["quantity"]); ?>"></td>
                      <?php endif; ?>
                      <td><?php echo e($Item["price"]); ?> <?php echo e($Item["currency"]); ?></td>
                      <td class="price"><?php echo e($Item["total"]); ?> <?php echo e($Item["currency"]); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <input type="hidden" name="totalprice" value="<?php echo e($nettotal); ?>"/>
                <input type="hidden" name="pid" value="<?php echo e($Item["pid"]); ?>"/>
                <select class="pull-right ml-2" id="cng_currency" name="cng_currency">
                  <option value="Taka"> Taka</option>
                  <option value="$"> $</option>
                  <option value="Rupee"> Rupee</option>
                  <option value="Euro"> Euro</option>
                </select>
                <span class="pull-right text-danger" id="totalprice"><strong> Over all Price : <?php echo e($nettotal); ?> </span></strong>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="purchasemethod">Purchase Method :</label>
                  <select class="form-control" id="purchasemethod" name="purchasemethod">
                    <option value="Home Delivary">Home Delivary</option>
                    <option value="Bikash">Bikash</option>
                    <option value="Rocket">Rocket</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label for="pnumber">Phone Number</label>
                <?php if((Session::get('phone')!="")||(Session::get('phone')!=null)): ?>
                <input class="form-control" id="pnumber" type="text" aria-describedby="phoneHelp" placeholder="Enter phone number" name="pnumber" value="<?php echo e(Session::get('phone')); ?>" required>
                <?php else: ?>
                <input class="form-control" id="pnumber" type="text" aria-describedby="phoneHelp" placeholder="Enter phone number" name="pnumber" required>
                <?php endif; ?>
                <small id="pnumberHelp" class="text-danger" value="<%= pnumber %>"></small>
              </div>
              <div class="col-md-4">
                <label for="address">Address</label>
                <?php if((Session::get('address')!="")||(Session::get('address')!=null)): ?>
                <input class="form-control" id="address" type="text" placeholder="i.e: House# 7, Road No# 1, Block# B, Niketon" name="address" value="<?php echo e(Session::get('address')); ?>" required>
                <?php else: ?>
                <input class="form-control" id="address" type="text" placeholder="i.e: House# 7, Road No# 1, Block# B, Niketon" name="address" required>
                <?php endif; ?>
                <small id="addressHelp" class="text-danger" value="<%= address %>"></small>
              </div>
            </div>
          </div>
          <!--<a class="btn btn-primary btn-block" href="/registration">Register</a>-->
          <div class="form-group">
            <div class="form-row">
              <div class="btn-group col-md-12">
                <a class="btn btn-danger col-md-6" href="/">Cancel</a>
                <input class="btn btn-primary col-md-6" type="submit" value="Check Out" />
                
              </div>
            </div>
          </div>
        </form>
        <?php else: ?>
        <div class="jumbotron" >
          <img class="rounded mx-auto d-block" src="custom_public/images/emptycart.png" alt=""><h1 class="text-center text-muted"> <strong>Cart is Empty!!</strong> </h1>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(asset('custom_public/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <!-- Custom plugin JavaScript-->
  <script src="<?php echo e(asset('custom_public/cartlist.js')); ?>"></script>
</body>

</html>
