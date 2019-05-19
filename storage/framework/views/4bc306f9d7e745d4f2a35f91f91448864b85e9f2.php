<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Clothing -> Home </title>

    <!-- Laravel core CSS -->
    <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('custom_public/css/modern-business.css')); ?>" rel="stylesheet">

  </head>

  <body>
    <?php if(session()->has('message')): ?>
    <div class="alert alert-success text-center mzs-alert" role="alert">
        <strong><?php echo e(session()->get('message')); ?></strong>
    </div>
    <?php endif; ?>
    <?php if($errors->has('loginReq')): ?>
    <div class="alert alert-danger text-center mzs-alert" role="alert">
        <strong><?php echo e($errors->first('loginReq')); ?></strong>
    </div>
    <?php endif; ?>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"> Clothing </a>
        <a class="nav-link" href="/cartlist" id="carticon">
          <i class="fa fa-shopping-cart shopping-cart" style="font-size:24px;color:white"></i>
          <span class="text-white" id="cartitem"></span>
        </a>
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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('custom_public/images/slide1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Welcome to Clothing.com</h3>
              <p>We are here to serve your needs.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('custom_public/images/slide2.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>It's a better place</h3>
              <p>To find any kind of cloth you want.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('custom_public/images/slide3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>For Everyone </h3>
              <p>And we tries to provide best service we can.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Looking For : </h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Men's Clothing</h4>
            <img class="card-img-top" src="custom_public/images/mc.jpeg" onerror="this.src = 'http://placehold.it/700x400'" alt="">
            <div class="card-body">
              <p class="card-text"><strong> Check Out all Products of Men</strong></p>
            </div>
            <div class="card-footer">
              <a href="/mensclothing" class="btn btn-primary">See More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Women's Clothing</h4>
            <img class="card-img-top" src="custom_public/images/kurti3.jpg" onerror="this.src = 'http://placehold.it/700x400'" alt="">
            <div class="card-body">
              <p class="card-text"><strong> Check Out all Products of Women</strong></p>
            </div>
            <div class="card-footer">
              <a href="/womensclothing" class="btn btn-primary">See More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Child's Clothing</h4>
            <img class="card-img-top" src="custom_public/images/cc.jpeg" onerror="this.src = 'http://placehold.it/700x400'" alt="">
            <div class="card-body">
              <p class="card-text"><strong> Check Out all Products of Child</strong></p>
            </div>
            <div class="card-footer">
              <a href="/childsclothing" class="btn btn-primary">See More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>All Products & Items </h2>

      <div class="row mt-3">
        <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($product->available>0): ?>
        
        <div class="col-lg-4 col-sm-6 portfolio-item" id="<?php echo e($product->pid); ?>">
          <input type="hidden" name="pid" value="<?php echo e($product->pid); ?>"/>
          <input type="hidden" name="pname" value="<?php echo e($product->pname); ?>"/>
          <input type="hidden" name="pfor" value="<?php echo e($product->pfor); ?>"/>
          <input type="hidden" name="category" value="<?php echo e($product->category); ?>"/>
          <input type="hidden" name="size" value="<?php echo e($product->size); ?>"/>
          <input type="hidden" name="available" value="<?php echo e($product->available); ?>"/>
          <input type="hidden" name="qavailable" value="<?php echo e($product->available); ?>"/>
          <input type="hidden" name="xsavailable" value="<?php echo e($product->xs_available); ?>"/>
          <input type="hidden" name="savailable" value="<?php echo e($product->s_available); ?>"/>
          <input type="hidden" name="mavailable" value="<?php echo e($product->m_available); ?>"/>
          <input type="hidden" name="lavailable" value="<?php echo e($product->l_available); ?>"/>
          <input type="hidden" name="xlavailable" value="<?php echo e($product->xl_available); ?>"/>
          <input type="hidden" name="xxlavailable" value="<?php echo e($product->xxl_available); ?>"/>
          <?php if(($product->offer==0)||($product->offer==null)): ?>
          <input type="hidden" name="price" value="<?php echo e($product->price); ?>"/>
          <?php else: ?>
            <?php 
            $discount = ($product->price * $product->offer)/100;
            $newprice = $product->price - $discount;
            ?>
            <input type="hidden" name="price" value="<?php echo e($newprice); ?>"/>
          <?php endif; ?>
          <input type="hidden" name="cost" value="<?php echo e($product->cost); ?>"/>
          <input type="hidden" name="currency" value="<?php echo e($product->currency); ?>"/>
          <input type="hidden" name="offer" value="<?php echo e($product->offer); ?>"/>
          <div class="card h-100 item">
            <a href="/cloth/<?php echo e($product->pid); ?>"><img class="card-img-top" src="custom_public/uploads/products/<?php echo e($product->pname); ?>/images/<?php echo e($product->pname); ?>0.jpg" onerror="this.src = 'custom_public/images/products.jpg'" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/cloth/<?php echo e($product->pid); ?>"><?php echo e($product->pname); ?></a>
              </h4>
              <h5><div class="product-rating">
                
                <?php if(floor($product->rating)>0): ?>
                  <?php for($i = 1; $i<=floor($product->rating); $i++): ?>
                    <span class="fa fa-star" data-rating="<?php echo e($i); ?>"></span>
                  <?php endfor; ?>
                  <?php for($i = floor($product->rating); $i<5; $i++): ?>
                    <span class="fa fa-star-o" data-rating="<?php echo e($i+1); ?>"></span>
                  <?php endfor; ?>
                  <span class="ml-2"><?php echo e(round($product->rating,2)); ?></span>
                <?php endif; ?>
                
                <?php if(($product->rating==0)||($product->rating==null)): ?>
                  <input type="hidden" name="rating" class="rating-value" value="0">
                <?php else: ?>
                  <input type="hidden" name="rating" class="rating-value" value="<?php echo e($product->rating); ?>">
                <?php endif; ?>
              </div></h5>
              <?php if(($product->offer==0)||($product->offer==null)): ?>
              <h5><?php echo e($product->price); ?> <?php echo e($product->currency); ?></h5>
              <?php else: ?>
              <h5><strike><?php echo e($product->price); ?> <?php echo e($product->currency); ?></strike> <span class="ml-1"><?php echo e($newprice); ?> <?php echo e($product->currency); ?></span><span class="pull-right text-danger"><?php echo e($product->offer); ?>% off</span></h5>
              <?php endif; ?>
              <p class="card-text">
                <strong> Product For : <?php echo e($product->pfor); ?> </strong></br>
                <strong> Product Category :  <?php echo e($product->category); ?> </strong></br>
                
              </p>
              
            </div>
            <?php if(Session::has('admin')): ?>
            <?php else: ?>
            <div class="card-footer">
              <h6> Give Rating : 
                <div class="star-rating pull-right" style="cursor: pointer">
                  <span class="fa fa-star-o" data-rating="1"></span>
                  <span class="fa fa-star-o" data-rating="2"></span>
                  <span class="fa fa-star-o" data-rating="3"></span>
                  <span class="fa fa-star-o" data-rating="4"></span>
                  <span class="fa fa-star-o" data-rating="5"></span>
                  <?php
                   $found = false;   
                  ?>
                  <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($rating->pid==$product->pid): ?>
                      <input type="hidden" name="rating" class="rating-value" value="<?php echo e($rating->rating); ?>">
                      <?php
                        $found = true; 
                      ?>
                      <?php break; ?>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php if($found == false): ?>
                    <input type="hidden" name="rating" class="rating-value" value="0">
                  <?php endif; ?>
                </div>
              </h6>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-success btn-sm mzs-atc">Add to Cart</button>
              <select class="allsizes" name="allsizes">
                <option value="<?php echo e($product->available); ?>">Size</option>
                <?php if(($product->xs_available!=null)||($product->xs_available!=0)): ?>
                <option value="<?php echo e($product->xs_available); ?>">XS</option>
                <?php endif; ?>
                <?php if(($product->s_available!=null)||($product->s_available!=0)): ?>
                <option value="<?php echo e($product->s_available); ?>">S</option>
                <?php endif; ?>
                <?php if(($product->m_available!=null)||($product->m_available!=0)): ?>
                <option value="<?php echo e($product->m_available); ?>">M</option>
                <?php endif; ?>
                <?php if(($product->l_available!=null)||($product->l_available!=0)): ?>
                <option value="<?php echo e($product->l_available); ?>">L</option>
                <?php endif; ?>
                <?php if(($product->xl_available!=null)||($product->xl_available!=0)): ?>
                <option value="<?php echo e($product->xl_available); ?>">XL</option>
                <?php endif; ?>
                <?php if(($product->xxl_available!=null)||($product->xxl_available!=0)): ?>
                <option value="<?php echo e($product->xxl_available); ?>">XXL</option>
                <?php endif; ?>
              </select>
              <input class="quantity" type="number" name="quantity" min="1" max="<?php echo e($product->available); ?>" value="1">
              <?php
                $found = false;   
              ?>
              <?php $__currentLoopData = $favourites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favourite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($favourite->pid==$product->pid): ?>
                  <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Added as favourite"><i class="fa fa-heart mzs-atf" style="font-size:24px"></i></button>
                  <?php
                    $found = true; 
                  ?>
                  <?php break; ?>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php if($found == false): ?>
                <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Add to favourite"><i class="fa fa-heart-o mzs-atf" style="font-size:24px"></i></button>
              <?php endif; ?>

              

              

            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      

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
    <script src="<?php echo e(asset('custom_public/addtocart.js')); ?>"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('.mzs-alert').fadeOut('slow'); //fast
      }, 5000);
    </script>

  </body>

</html>
