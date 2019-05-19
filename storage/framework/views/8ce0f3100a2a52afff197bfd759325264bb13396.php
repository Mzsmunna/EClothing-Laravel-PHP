<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">-->
  <title>Clothing -> Update Product</title>
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
            background: url(../../custom_public/images/3.jpg) no-repeat 0px 0px;
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
      <div class="card-header"><strong>Update Product</strong></div>
      <div class="card-body">
        <form method="post" action="/admin/updateproduct/<?php echo e($product[0]->pid); ?>" enctype="multipart/form-data" id="add-update-product">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="form-group">
            <div class="form-row">
             <div class="col-md-6">
                <label for="pname">Product Name:</label>
                <input class="form-control" id="pname" type="text" aria-describedby="nameHelp" placeholder="Enter Poduct name" name="pname" value="<?php echo e($product[0]->pname); ?>">
                <?php if($errors->has('itemEXT')): ?>
                  <small id="itemEXT" class="text-danger"><?php echo e($errors->first('itemEXT')); ?></small>
                <?php endif; ?>
                <small id="pnameHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
              <label>Product Sizes & Quantity :</label>
              <small id="productsizeHelp" class="text-danger"></small>
            <div class="form-row" id="allsizes">
              <div class="col-md-4">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->xs_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="xs" name="xs" value="XS" checked>
                  <label class="custom-control-label" for="xs">Extra Small :   </label>
                </div>
                
                <input class="form-control mt-2" id="xsamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XS" name="xsamount" value="<?php echo e($product[0]->xs_available); ?>" min="1">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="xs" name="xs" value="XS">
                  <label class="custom-control-label" for="xs">Extra Small :   </label>
                </div>
                
                <input class="form-control mt-2" id="xsamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XS" name="xsamount" value="<?php echo e(old('xsamount')); ?>" min="1" readonly>
                <?php endif; ?>
                <small id="xsamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->s_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="s" name="s" value="S" checked>
                  <label class="custom-control-label" for="s">Small : </label>
                </div>
                
                <input class="form-control mt-2" id="samount" type="number" aria-describedby="nameHelp" placeholder="Quantity for S" name="samount" value="<?php echo e($product[0]->s_available); ?>" min="1">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="s" name="s" value="S">
                  <label class="custom-control-label" for="s">Small : </label>
                </div>
                
                <input class="form-control mt-2" id="samount" type="number" aria-describedby="nameHelp" placeholder="Quantity for S" name="samount" value="<?php echo e(old('samount')); ?>" min="1" readonly>
                <?php endif; ?>
                <small id="samountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->m_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="m" name="m" value="M" checked>
                  <label class="custom-control-label" for="m">Midium : </label>
                </div>
                
                <input class="form-control mt-2" id="mamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for M" name="mamount" value="<?php echo e($product[0]->m_available); ?>" min="1">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="m" name="m" value="M">
                  <label class="custom-control-label" for="m">Midium : </label>
                </div>
                
                <input class="form-control mt-2" id="mamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for M" name="mamount" value="<?php echo e(old('mamount')); ?>" min="1" readonly>
                <?php endif; ?>
                <small id="mamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4 mt-2">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->l_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="l" name="l" value="L" checked>
                  <label class="custom-control-label" for="l">Large : </label>
                </div>
                
                <input class="form-control mt-2" id="lamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for L" name="lamount" value="<?php echo e($product[0]->l_available); ?>">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="l" name="l" value="L">
                  <label class="custom-control-label" for="l">Large : </label>
                </div>
                
                <input class="form-control mt-2" id="lamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for L" name="lamount" value="<?php echo e(old('lamount')); ?>" readonly>
                <?php endif; ?>
                <small id="lamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4 mt-2">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->xl_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="xl" name="xl" value="XL" checked>
                  <label class="custom-control-label" for="xl">Extra Large : </label>
                </div>
                
                <input class="form-control mt-2" id="xlamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XL" name="xlamount" value="<?php echo e($product[0]->xl_available); ?>">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="xl" name="xl" value="XL">
                  <label class="custom-control-label" for="xl">Extra Large : </label>
                </div>
                
                <input class="form-control mt-2" id="xlamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XL" name="xlamount" value="<?php echo e(old('xlamount')); ?>" readonly>
                <?php endif; ?>
                <small id="xlamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4 mt-2">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <?php if($product[0]->xxl_available>0): ?>
                  <input type="checkbox" class="custom-control-input" id="xxl" name="xxl" value="XXL" checked>
                  <label class="custom-control-label" for="xxl">Excess Large : </label>
                </div>
                
                <input class="form-control mt-2" id="xxlamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XXL" name="xxlamount" value="<?php echo e($product[0]->xxl_available); ?>">
                <?php else: ?>
                <input type="checkbox" class="custom-control-input" id="xxl" name="xxl" value="XXL">
                  <label class="custom-control-label" for="xxl">Excess Large : </label>
                </div>
                
                <input class="form-control mt-2" id="xxlamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for XXL" name="xxlamount" value="<?php echo e(old('xxlamount')); ?>" readonly>
                <?php endif; ?>
                <small id="xxlamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-4 mt-2">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="alls" name="alls" value="ALLS">
                  <label class="custom-control-label" for="alls">All Above Sizes : </label>
                </div>
                
                <input class="form-control mt-2" id="allsamount" type="number" aria-describedby="nameHelp" placeholder="Quantity for ALL" name="allsamount" value="<?php echo e(old('allsamount')); ?>" readonly>
                <small id="allsamountHelp" class="text-danger"></small>
              </div>
              <div class="col-md-7 mt-5 ml-3">
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="merge" name="merge" value="merge">
                  <label class="custom-control-label text-danger" for="merge">Check to Merge all with current Quantity </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="pfor">Product For:</label>
                  <select class="form-control" id="pfor" name="pfor">
                    <option value="<?php echo e($product[0]->pfor); ?>"><?php echo e($product[0]->pfor); ?></option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Child">Child</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label for="category">Available Category :</label>
                  <select class="form-control" id="category" name="category">
                    <option value="<?php echo e($product[0]->category); ?>"><?php echo e($product[0]->category); ?></option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
              </div>
              <div class="col-md-4">
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="addcategory" name="addcategory" value="addcategory">
                  <label class="custom-control-label" for="addcategory">Add New Category :   </label>
                </div>
                
                <input class="form-control mt-2" id="categoryNew" type="text" aria-describedby="nameHelp" placeholder="Enter New Category" name="categoryNew" value="<?php echo e(old('categoryNew')); ?>" readonly>
                <small id="categoryHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="price">Product Price:</label>
                <input class="form-control" id="price" type="number" aria-describedby="nameHelp" placeholder="in number" name="price" min="0" value="<?php echo e($product[0]->price); ?>">
                <small id="priceHelp" class="text-danger"></small>
              </div>
              <div class="col-md-3">
                <label for="currency">Currency:</label>
                  <select class="form-control" id="currency" name="currency">
                    <option value="<?php echo e($product[0]->currency); ?>"><?php echo e($product[0]->currency); ?></option>
                    <option value="Taka">Taka</option>
                    <option value="$">$</option>
                    <option value="Euro">Euro</option>
                    <option value="Rupee">Rupee</option>
                  </select>
              </div>
              <div class="col-md-3">
                <label for="cost">Manufecture Cost:</label>
                <input class="form-control" id="cost" type="number" aria-describedby="nameHelp" placeholder="in number" name="cost" min="0" value="<?php echo e($product[0]->cost); ?>">
                <small id="costHelp" class="text-danger"></small>
              </div>
              <div class="col-md-3">
                <label for="offer">Offer:</label>
                <input class="form-control" id="offer" type="number" aria-describedby="nameHelp" placeholder="in %" name="offer" min="0" value="<?php echo e($product[0]->offer); ?>">
                <small id="offerHelp" class="text-danger"></small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="productpics">Upload Pic:</label>
                <input class="form-control" id="productpics" type="file" multiple="multiple" name="productpics[]">
              </div>
            </div>
            <small id="productpicsHelp" class="text-danger"></small>
          </div>
          <!--<a class="btn btn-primary btn-block" href="/registration">Register</a>-->
          <input class="btn btn-primary btn-block" type="submit" value="Update Product" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/admin">Go back to Admin Page</a>
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
  <script src="<?php echo e(asset('custom_public/product-validate.js')); ?>"></script>
</body>

</html>
