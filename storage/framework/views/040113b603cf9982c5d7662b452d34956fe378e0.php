<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>C&S Clothing Admin</title>
  <!-- Laravel core CSS -->
    <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

  <!-- Bootstrap core CSS-->
  <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- Material icon core CSS-->
  <link href="<?php echo e(asset('custom_public/vendor/mdi/css/materialdesignicons.min.css')); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo e(asset('custom_public/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('custom_public/css/sb-admin.css')); ?>" rel="stylesheet">
  <!-- My styles for this template-->
  <link href="<?php echo e(asset('custom_public/css/admin.css')); ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin">EShop Clothing</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/admin">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Welcome <?php echo e(Session::get('admin')); ?></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a class="nav-link" href="/admin/usertable">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">User Table</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="/admin">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">Product Table</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/admin/purchasetable">
                  <i class="fa fa-fw fa-sitemap"></i>
                  <span class="nav-link-text">Purchase Table</span>
                  </a>
              </li>
              <li>
                <a class="nav-link" href="/admin/messagetable">
                  <i class="fa fa-fw fa-sitemap"></i>
                  <span class="nav-link-text">Message Table</span>
                </a>
             </li>
            <!--<li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>-->
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown" style="max-height: 300px;
          margin-bottom: 10px;
          overflow:scroll;">
            <h6 class="dropdown-header">New Messages:</h6>
            <?php if($allMessages!=null): ?>
            <?php $__currentLoopData = $allMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/admin/msgfrom/<?php echo e($message->msg_from); ?>">
              <strong><?php echo e($message->msg_from); ?></strong>
              <span class="small float-right text-muted"> <?php echo e($message->send_time); ?> | <?php echo e($message->send_date); ?></span>
              <div class="dropdown-message small"><?php echo e($message->message); ?></div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="dropdown-divider"></div>
            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown" style="max-height: 350px; margin-bottom: 10px;
          overflow:scroll;">
            <h6 class="dropdown-header">New Alerts:</h6>
            <?php if($notifications!=null): ?>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($notify->notify_to=="Admin"): ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/cloth/<?php echo e($notify->notify_forid); ?>">
              <span class="text-warning">
                <strong>
                  <i class="fa fa-warning"></i> <span class="small float-right text-muted"><?php echo e($notify->notify_time); ?> | <?php echo e($notify->notify_date); ?></span>
                  <p><?php echo e($notify->notify_title); ?></p>
                </strong>
              </span>
              
            </a>
            <div class="container-fluid small"><?php echo e($notify->notify_dtls); ?></div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="dropdown-divider"></div>
            
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for..." id="nam" />
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="search">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
      <?php if(session()->has('message')): ?>
      <div class="alert alert-success text-center msgdiv">
          <strong><?php echo e(session()->get('message')); ?></strong>
      </div>
      <?php endif; ?>
      <?php if($errors->has('oops')): ?>
      <div class="alert alert-danger text-center msgdiv">
          <strong><?php echo e($errors->first('oops')); ?></strong>
      </div>
      <?php endif; ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"><?php echo e(Session::get('admin')); ?></a>
        </li>
        <li class="breadcrumb-item active">Admin Panel</li>
        <li class="breadcrumb-item btn-group btn-group-justified pull-right">
          <a class="btn btn-primary btn-md pull-right" href="/admin/addproduct">Add Product</a>
          <a class="btn btn-success btn-md ml-1" href="/admin/adduser/User">Add new User</a>
          <a class="btn btn-danger btn-md ml-1" href="/admin/adduser/Admin">Assign new Admin</a>
        </li>
      </ol>

      <div class="row mb-3">

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left" style="font-size:50px;">
                  <i class="mdi mdi-cube text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total Revenue</p>
                  <div class="fluid-container">
                    <h5 class="font-weight-medium text-right mb-0"><?php echo e($allRecords->totalPrice - $allRecords->totalCost); ?> TK.</h5>
                      <p class="text-muted small mt-3 mb-0"> Investment : <?php echo e(($allRecords->totalQuantity + $allRecords->totalSales)*$allRecords->totalCost); ?> TK.
                      </p>
                  </div>
                </div>
              </div>
              <p class="text-muted small mt-3 mb-0">
                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Costs : <?php echo e($allRecords->totalCost); ?> | Earning : <?php echo e($allRecords->totalPrice); ?>

              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left" style="font-size:50px;">
                  <i class="mdi mdi-receipt text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Products</p>
                  <div class="fluid-container">
                    <h5 class="font-weight-medium text-right mb-0"><?php echo e($allRecords->totalProducts); ?></h5>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Quantity : <?php echo e($allRecords->totalQuantity); ?> 
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left" style="font-size:50px;">
                  <i class="mdi mdi-poll-box text-success icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Sales</p>
                  <div class="fluid-container">
                    <h5 class="font-weight-medium text-right mb-0"><?php echo e($allRecords->totalSales); ?></h5>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Total Sales
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left" style="font-size:50px;">
                  <i class="mdi mdi-account-location text-info icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Registered Users</p>
                  <div class="fluid-container">
                    <h5 class="font-weight-medium text-right mb-0"><?php echo e($allRecords->totalCustomers); ?></h5>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Admin : <?php echo e($allRecords->totalAdmins); ?> 
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Item Sold on Each Day</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Revenue earned from Each Day</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary" id="revenue">34,693 Taka</div>
                  <div class="small text-muted">Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning" id="expenses">18,474 Taka</div>
                  <div class="small text-muted">Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success" id="profits">16,219 Taka</div>
                  <div class="small text-muted">Profit Margin</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Most Sold Product Pie Chart</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> All Purchases 
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Product Name</th>
                      <th>Product Category</th>
                      <th>Product For</th>
                      <th>Product Size</th>
                      <th>Quantity Sold</th>
                      <th>Price/item</th>
                      <th>Cost/item</th>
                      <th>Offer %</th>
                      <th>Total Price</th>
                      <th>Profit</th>
                      <th>Purchased By</th>
                      <th>Purchase Method</th>
                      <th>Purchase Number</th>
                      <th>Purchase Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($purchasesAll!=null): ?>
                      <?php
                        $pNo = count($purchasesAll);
                        $netTotal = 0;
                        $totalItems = 0;
                        $profit = 0;
                        $totalprofit = 0;
                        $currency = "Taka";
                      ?>
                      <?php $__currentLoopData = $purchasesAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                        $netTotal += $purchase->totalprice;
                        $totalItems += $purchase->quantity;

                        if(($purchase->currency=="Taka")||($purchase->currency=="TK."))
                        {
                          $cprice = $purchase->price;
                          $ccost = $purchase->cost;

                        }else if(($purchase->currency=="Rupee")||($purchase->currency=="RS."))
                        {
                          $cprice = $purchase->price * 1.5;
                          $ccost = $purchase->cost * 1.5;
                          //$profit += ($cprice - $ccost) * $purchase->quantity;

                        }else if($purchase->currency=="$")
                        {
                          $cprice = $purchase->price * 82.71;
                          $ccost = $purchase->cost * 82.71;
                          //$profit += ($cprice - $ccost) * $purchase->quantity;

                        }else if($purchase->currency=="Euro")
                        {
                          $cprice = $purchase->price * 94.91;
                          $ccost = $purchase->cost * 94.91;
                          //$profit += ($cprice - $ccost) * $purchase->quantity;
                        }
                        $profit = ($cprice - $ccost) * $purchase->quantity;
                        $totalprofit += ($cprice - $ccost) * $purchase->quantity;
                      ?>
                      <tr>
                        <td><?php echo e($purchase->date); ?></td>
                        <td><a href="/cloth/<?php echo e($purchase->pid); ?>"><?php echo e($purchase->pname); ?></a></td>
                        <td><?php echo e($purchase->category); ?></td>
                        <td><?php echo e($purchase->pfor); ?></td>
                        <td><?php echo e($purchase->size); ?></td>
                        <td><?php echo e($purchase->quantity); ?></td>
                        <td><?php echo e($purchase->price); ?> <?php echo e($purchase->currency); ?></td>
                        <td><?php echo e($purchase->cost); ?> <?php echo e($purchase->currency); ?></td>
                        <td><?php echo e($purchase->quantity); ?></td>
                        <td><?php echo e($purchase->totalprice); ?> <?php echo e($purchase->currency); ?></td>
                        <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                        <td><a href="/user-profile/<?php echo e($purchase->purchasedby); ?>"><?php echo e($purchase->purchasedby); ?></a></td>
                        <td><?php echo e($purchase->purchasedmethod); ?></td>
                        <td><?php echo e($purchase->phonenumber); ?></td>
                        <td><?php echo e($purchase->address); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($purchasesAll!=null): ?>
                <div class="card-footer small text-muted">
                  <P>Total Purchases : <?php echo e($pNo); ?></P>
                  <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                  <P>Total Income : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                  <P>Total Profit : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
                </div>
              <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Most Purchased Products
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Quantity Sold</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product For</th>
                        <th>Quantity Available</th>
                        <th>XS Available</th>
                        <th>S Available</th>
                        <th>M Available</th>
                        <th>L Available</th>
                        <th>XL Available</th>
                        <th>XXL Available</th>
                        <th>XS Sold</th>
                        <th>S Sold</th>
                        <th>M Sold</th>
                        <th>L Sold</th>
                        <th>XL Sold</th>
                        <th>XXL Sold</th>
                        <th>Price/item</th>
                        <th>Cost/item</th>
                        <th>Offer %</th>
                        <th>Total Price</th>
                        <th>Profit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($mostSales!=null): ?>
                        <?php
                          $totalProduct = count($mostSales);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        ?>
                        <?php $__currentLoopData = $mostSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $netTotal += $sale->totalprice;
                          $totalItems += $sale->allQuantities;
                          
                          if(($sale->currency=="Taka")||($sale->currency=="TK."))
                          {
                            $cprice = $sale->price;
                            $ccost = $sale->cost;

                          }else if(($sale->currency=="Rupee")||($sale->currency=="RS."))
                          {
                            $cprice = $sale->price * 1.5;
                            $ccost = $sale->cost * 1.5;
                            //$profit += ($cprice - $ccost) * $sale->allQuantities;

                          }else if($sale->currency=="$")
                          {
                            $cprice = $sale->price * 82.71;
                            $ccost = $sale->cost * 82.71;
                            //$profit += ($cprice - $ccost) * $sale->allQuantities;

                          }else if($sale->currency=="Euro")
                          {
                            $cprice = $sale->price * 94.91;
                            $ccost = $sale->cost * 94.91;
                            //$profit += ($cprice - $ccost) * $sale->allQuantities;
                          }
                          $profit = ($cprice - $ccost) * $sale->allQuantities;
                          $totalprofit += ($cprice - $ccost) * $sale->allQuantities;
                        ?>
                        <tr>
                          <td><?php echo e($sale->allQuantities); ?></td>
                          <td><a href="/cloth/<?php echo e($sale->pid); ?>"><?php echo e($sale->pname); ?></a></td>
                          <td><?php echo e($sale->category); ?></td>
                          <td><?php echo e($sale->pfor); ?></td>
                          <td><?php echo e($sale->available); ?></td>
                          <td><?php echo e($sale->xs_available); ?></td>
                          <td><?php echo e($sale->s_available); ?></td>
                          <td><?php echo e($sale->m_available); ?></td>
                          <td><?php echo e($sale->l_available); ?></td>
                          <td><?php echo e($sale->xl_available); ?></td>
                          <td><?php echo e($sale->xxl_available); ?></td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xs')||($size->size == 'XS')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 's')||($size->size == 'S')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'm')||($size->size == 'M')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'l')||($size->size == 'L')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xl')||($size->size == 'XL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xxl')||($size->size == 'XXL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td><?php echo e($sale->price); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->cost); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->offer); ?></td>
                          <td><?php echo e($sale->totalprice); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($mostSales!=null): ?>
              <div class="card-footer small text-muted">
                <P>Total Product Purchased : <?php echo e($totalProduct); ?></P>
                <P>Total Items Sold : <?php echo e($totalItems); ?></P>
              </div>
              <?php endif; ?>
            </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Purchase of yesterday 
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Product Category</th>
                      <th>Product For</th>
                      <th>Product Size</th>
                      <th>Quantity Sold</th>
                      <th>Price/item</th>
                      <th>Cost/item</th>
                      <th>Offer %</th>
                      <th>Total Price</th>
                      <th>Profit</th>
                      <th>Purchased By</th>
                      <th>Purchase Method</th>
                      <th>Purchase Number</th>
                      <th>Purchase Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($purchasesY!=null): ?>
                      <?php
                        $pyNo = count($purchasesY);
                        $netTotal = 0;
                        $totalItems = 0;
                        $profit = 0;
                        $totalprofit = 0;
                        $currency = "Taka";
                      ?>
                      <?php $__currentLoopData = $purchasesY; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ypurchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                        $netTotal += $ypurchase->totalprice;
                        $totalItems += $ypurchase->quantity;

                        if(($ypurchase->currency=="Taka")||($ypurchase->currency=="TK."))
                        {
                          $cprice = $ypurchase->price;
                          $ccost = $ypurchase->cost;

                        }else if(($ypurchase->currency=="Rupee")||($ypurchase->currency=="RS."))
                        {
                          $cprice = $ypurchase->price * 1.5;
                          $ccost = $ypurchase->cost * 1.5;
                          //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                        }else if($ypurchase->currency=="$")
                        {
                          $cprice = $ypurchase->price * 82.71;
                          $ccost = $ypurchase->cost * 82.71;
                          //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                        }else if($ypurchase->currency=="Euro")
                        {
                          $cprice = $ypurchase->price * 94.91;
                          $ccost = $ypurchase->cost * 94.91;
                          //$profit += ($cprice - $ccost) * $ypurchase->quantity;
                        }
                        $profit = ($cprice - $ccost) * $ypurchase->quantity;
                        $totalprofit += ($cprice - $ccost) * $ypurchase->quantity;
                      ?>
                      <tr>
                        <td><a href="/cloth/<?php echo e($ypurchase->pid); ?>"><?php echo e($ypurchase->pname); ?></a></td>
                        <td><?php echo e($ypurchase->category); ?></td>
                        <td><?php echo e($ypurchase->pfor); ?></td>
                        <td><?php echo e($ypurchase->size); ?></td>
                        <td><?php echo e($ypurchase->quantity); ?></td>
                        <td><?php echo e($ypurchase->price); ?> <?php echo e($ypurchase->currency); ?></td>
                        <td><?php echo e($ypurchase->cost); ?> <?php echo e($ypurchase->currency); ?></td>
                        <td><?php echo e($ypurchase->quantity); ?></td>
                        <td><?php echo e($ypurchase->totalprice); ?> <?php echo e($ypurchase->currency); ?></td>
                        <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                        <td><a href="/user-profile/<?php echo e($ypurchase->purchasedby); ?>"><?php echo e($ypurchase->purchasedby); ?></a></td>
                        <td><?php echo e($ypurchase->purchasedmethod); ?></td>
                        <td><?php echo e($ypurchase->phonenumber); ?></td>
                        <td><?php echo e($ypurchase->address); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($purchasesY!=null): ?>
                <div class="card-footer small text-muted">
                  <P>Total Purchases : <?php echo e($pyNo); ?></P>
                  <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                  <P>Total Income yesterday : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                  <P>Total Profit yesterday : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
                </div>
              <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                  <i class="fa fa-table"></i> Purchase of Today 
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Product Category</th>
                          <th>Product For</th>
                          <th>Product Size</th>
                          <th>Quantity Sold</th>
                          <th>Price/item</th>
                          <th>Cost/item</th>
                          <th>Offer %</th>
                          <th>Total Price</th>
                          <th>Profit</th>
                          <th>Purchased By</th>
                          <th>Purchase Method</th>
                          <th>Purchase Number</th>
                          <th>Purchase Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($purchasesT!=null): ?>
                          <?php
                            $ptNo = count($purchasesT);
                            $netTotal = 0;
                            $totalItems = 0;
                            $profit = 0;
                            $totalprofit = 0;
                            $currency = "Taka";
                          ?>
                          <?php $__currentLoopData = $purchasesT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tpurchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                            $netTotal += $tpurchase->totalprice;
                            $totalItems += $tpurchase->quantity;
                            
                            if(($tpurchase->currency=="Taka")||($tpurchase->currency=="TK."))
                            {
                              $cprice = $tpurchase->price;
                              $ccost = $tpurchase->cost;

                            }else if(($tpurchase->currency=="Rupee")||($tpurchase->currency=="RS."))
                            {
                              $cprice = $tpurchase->price * 1.5;
                              $ccost = $tpurchase->cost * 1.5;
                              //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                            }else if($tpurchase->currency=="$")
                            {
                              $cprice = $tpurchase->price * 82.71;
                              $ccost = $tpurchase->cost * 82.71;
                              //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                            }else if($tpurchase->currency=="Euro")
                            {
                              $cprice = $tpurchase->price * 94.91;
                              $ccost = $tpurchase->cost * 94.91;
                              //$profit += ($cprice - $ccost) * $ypurchase->quantity;
                            }
                            $profit = ($cprice - $ccost) * $tpurchase->quantity;
                            $totalprofit += ($cprice - $ccost) * $tpurchase->quantity;
                          ?>
                          <tr>
                            <td><a href="/cloth/<?php echo e($tpurchase->pid); ?>"><?php echo e($tpurchase->pname); ?></a></td>
                            <td><?php echo e($tpurchase->category); ?></td>
                            <td><?php echo e($tpurchase->pfor); ?></td>
                            <td><?php echo e($tpurchase->size); ?></td>
                            <td><?php echo e($tpurchase->quantity); ?></td>
                            <td><?php echo e($tpurchase->price); ?> <?php echo e($tpurchase->currency); ?></td>
                            <td><?php echo e($tpurchase->cost); ?> <?php echo e($tpurchase->currency); ?></td>
                            <td><?php echo e($tpurchase->offer); ?></td>
                            <td><?php echo e($tpurchase->totalprice); ?> <?php echo e($tpurchase->currency); ?></td>
                            <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                            <td><a href="/user-profile/<?php echo e($tpurchase->purchasedby); ?>"><?php echo e($tpurchase->purchasedby); ?></a></td>
                            <td><?php echo e($tpurchase->purchasedmethod); ?></td>
                            <td><?php echo e($tpurchase->phonenumber); ?></td>
                            <td><?php echo e($tpurchase->address); ?></td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <?php if($purchasesT!=null): ?>
                <div class="card-footer small text-muted">
                  <P>Total Purchases : <?php echo e($ptNo); ?></P>
                  <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                  <P>Total Income Today : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                  <P>Total Profit Today : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
                </div>
                <?php endif; ?>
              </div>
          </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Purchase of Last 7 Days
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Date</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product For</th>
                        <th>Product Size</th>
                        <th>Quantity Sold</th>
                        <th>Price/item</th>
                        <th>Cost/item</th>
                        <th>Offer %</th>
                        <th>Total Price</th>
                        <th>Profit</th>
                        <th>Purchased By</th>
                        <th>Purchase Method</th>
                        <th>Purchase Number</th>
                        <th>Purchase Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($sevenDays!=null): ?>
                        <?php
                          $dNo = count($sevenDays);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        ?>
                        <?php $__currentLoopData = $sevenDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $netTotal += $day->totalprice;
                          $totalItems += $day->quantity;
                          
                          if(($day->currency=="Taka")||($day->currency=="TK."))
                          {
                            $cprice = $day->price;
                            $ccost = $day->cost;

                          }else if(($day->currency=="Rupee")||($day->currency=="RS."))
                          {
                            $cprice = $day->price * 1.5;
                            $ccost = $day->cost * 1.5;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                          }else if($day->currency=="$")
                          {
                            $cprice = $day->price * 82.71;
                            $ccost = $day->cost * 82.71;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                          }else if($day->currency=="Euro")
                          {
                            $cprice = $day->price * 94.91;
                            $ccost = $day->cost * 94.91;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;
                          }
                          $profit = ($cprice - $ccost) * $day->quantity;
                          $totalprofit += ($cprice - $ccost) * $day->quantity;
                        ?>
                        <tr>
                          <td><?php echo e($day->date); ?></td>
                          <td><a href="/cloth/<?php echo e($day->pid); ?>"><?php echo e($day->pname); ?></a></td>
                          <td><?php echo e($day->category); ?></td>
                          <td><?php echo e($day->pfor); ?></td>
                          <td><?php echo e($day->size); ?></td>
                          <td><?php echo e($day->quantity); ?></td>
                          <td><?php echo e($day->price); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($day->cost); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($day->offer); ?></td>
                          <td><?php echo e($day->totalprice); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                          <td><a href="/user-profile/<?php echo e($day->purchasedby); ?>"><?php echo e($day->purchasedby); ?></a></td>
                          <td><?php echo e($day->purchasedmethod); ?></td>
                          <td><?php echo e($day->phonenumber); ?></td>
                          <td><?php echo e($day->address); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($sevenDays!=null): ?>
              <div class="card-footer small text-muted">
                <P>Total Purchases : <?php echo e($dNo); ?></P>
                <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                <P>Total Income Today : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                <P>Total Profit Today : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
              </div>
              <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Purchase of Last 1 Month
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Date</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product For</th>
                        <th>Product Size</th>
                        <th>Quantity Sold</th>
                        <th>Price/item</th>
                        <th>Cost/item</th>
                        <th>Offer %</th>
                        <th>Total Price</th>
                        <th>Profit</th>
                        <th>Purchased By</th>
                        <th>Purchase Method</th>
                        <th>Purchase Number</th>
                        <th>Purchase Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($thirtyDays!=null): ?>
                        <?php
                          $dNo = count($thirtyDays);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        ?>
                        <?php $__currentLoopData = $thirtyDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $netTotal += $day->totalprice;
                          $totalItems += $day->quantity;
                          
                          if(($day->currency=="Taka")||($day->currency=="TK."))
                          {
                            $cprice = $day->price;
                            $ccost = $day->cost;

                          }else if(($day->currency=="Rupee")||($day->currency=="RS."))
                          {
                            $cprice = $day->price * 1.5;
                            $ccost = $day->cost * 1.5;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                          }else if($day->currency=="$")
                          {
                            $cprice = $day->price * 82.71;
                            $ccost = $day->cost * 82.71;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;

                          }else if($day->currency=="Euro")
                          {
                            $cprice = $day->price * 94.91;
                            $ccost = $day->cost * 94.91;
                            //$profit += ($cprice - $ccost) * $ypurchase->quantity;
                          }
                          $profit = ($cprice - $ccost) * $day->quantity;
                          $totalprofit += ($cprice - $ccost) * $day->quantity;
                        ?>
                        <tr>
                          <td><?php echo e($day->date); ?></td>
                          <td><a href="/cloth/<?php echo e($day->pid); ?>"><?php echo e($day->pname); ?></a></td>
                          <td><?php echo e($day->category); ?></td>
                          <td><?php echo e($day->pfor); ?></td>
                          <td><?php echo e($day->size); ?></td>
                          <td><?php echo e($day->quantity); ?></td>
                          <td><?php echo e($day->price); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($day->cost); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($day->offer); ?></td>
                          <td><?php echo e($day->totalprice); ?> <?php echo e($day->currency); ?></td>
                          <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                          <td><a href="/user-profile/<?php echo e($day->purchasedby); ?>"><?php echo e($day->purchasedby); ?></a></td>
                          <td><?php echo e($day->purchasedmethod); ?></td>
                          <td><?php echo e($day->phonenumber); ?></td>
                          <td><?php echo e($day->address); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($thirtyDays!=null): ?>
              <div class="card-footer small text-muted">
                <P>Total Purchases : <?php echo e($dNo); ?></P>
                <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                <P>Total Income Today : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                <P>Total Profit Today : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
              </div>
              <?php endif; ?>
            </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Most Purchased Products of Yesterday
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Quantity Sold</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product For</th>
                        <th>Quantity Available</th>
                        <th>XS Available</th>
                        <th>S Available</th>
                        <th>M Available</th>
                        <th>L Available</th>
                        <th>XL Available</th>
                        <th>XXL Available</th>
                        <th>XS Sold</th>
                        <th>S Sold</th>
                        <th>M Sold</th>
                        <th>L Sold</th>
                        <th>XL Sold</th>
                        <th>XXL Sold</th>
                        <th>Price/item</th>
                        <th>Cost/item</th>
                        <th>Offer %</th>
                        <th>Total Price</th>
                        <th>Profit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($mostSalesYesterday!=null): ?>
                        <?php
                          $totalProduct = count($mostSalesYesterday);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        ?>
                        <?php $__currentLoopData = $mostSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $netTotal += $sale->totalprice;
                          $totalItems += $sale->allQuantities;
                          
                          if(($sale->currency=="Taka")||($sale->currency=="TK."))
                          {
                            $cprice = $sale->price;
                            $ccost = $sale->cost;

                          }else if(($sale->currency=="Rupee")||($sale->currency=="RS."))
                          {
                            $cprice = $sale->price * 1.5;
                            $ccost = $sale->cost * 1.5;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;

                          }else if($sale->currency=="$")
                          {
                            $cprice = $sale->price * 82.71;
                            $ccost = $sale->cost * 82.71;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;

                          }else if($sale->currency=="Euro")
                          {
                            $cprice = $sale->price * 94.91;
                            $ccost = $sale->cost * 94.91;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;
                          }
                          $profit = ($cprice - $ccost) * $sale->allQuantities;
                          $totalprofit += ($cprice - $ccost) * $sale->allQuantities;
                        ?>
                        <tr>
                          <td><?php echo e($sale->allQuantities); ?></td>
                          <td><a href="/cloth/<?php echo e($sale->pid); ?>"><?php echo e($sale->pname); ?></a></td>
                          <td><?php echo e($sale->category); ?></td>
                          <td><?php echo e($sale->pfor); ?></td>
                          <td><?php echo e($sale->available); ?></td>
                          <td><?php echo e($sale->xs_available); ?></td>
                          <td><?php echo e($sale->s_available); ?></td>
                          <td><?php echo e($sale->m_available); ?></td>
                          <td><?php echo e($sale->l_available); ?></td>
                          <td><?php echo e($sale->xl_available); ?></td>
                          <td><?php echo e($sale->xxl_available); ?></td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xs')||($size->size == 'XS')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 's')||($size->size == 'S')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'm')||($size->size == 'M')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'l')||($size->size == 'L')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xl')||($size->size == 'XL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesYesterday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xxl')||($size->size == 'XXL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td><?php echo e($sale->price); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->cost); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->offer); ?></td>
                          <td><?php echo e($sale->totalprice); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($mostSalesYesterday!=null): ?>
              <div class="card-footer small text-muted">
                <P>Total Product Purchased : <?php echo e($totalProduct); ?></P>
                <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                <P>Total Income Today : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                <P>Total Profit Today : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
              </div>
              <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Most Purchase Products of Today
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Quantity Sold</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product For</th>
                        <th>Quantity Available</th>
                        <th>XS Available</th>
                        <th>S Available</th>
                        <th>M Available</th>
                        <th>L Available</th>
                        <th>XL Available</th>
                        <th>XXL Available</th>
                        <th>XS Sold</th>
                        <th>S Sold</th>
                        <th>M Sold</th>
                        <th>L Sold</th>
                        <th>XL Sold</th>
                        <th>XXL Sold</th>
                        <th>Price/item</th>
                        <th>Cost/item</th>
                        <th>Offer %</th>
                        <th>Total Price</th>
                        <th>Profit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($mostSalesToday!=null): ?>
                        <?php
                          $totalProduct = count($mostSalesToday);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        ?>
                        <?php $__currentLoopData = $mostSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                          $netTotal += $sale->totalprice;
                          $totalItems += $sale->allQuantities;
                          
                          if(($sale->currency=="Taka")||($sale->currency=="TK."))
                          {
                            $cprice = $sale->price;
                            $ccost = $sale->cost;

                          }else if(($sale->currency=="Rupee")||($sale->currency=="RS."))
                          {
                            $cprice = $sale->price * 1.5;
                            $ccost = $sale->cost * 1.5;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;

                          }else if($sale->currency=="$")
                          {
                            $cprice = $sale->price * 82.71;
                            $ccost = $sale->cost * 82.71;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;

                          }else if($sale->currency=="Euro")
                          {
                            $cprice = $sale->price * 94.91;
                            $ccost = $sale->cost * 94.91;
                            //$profit += ($cprice - $ccost) * $ypurchase->allQuantities;
                          }
                          $profit = ($cprice - $ccost) * $sale->allQuantities;
                          $totalprofit += ($cprice - $ccost) * $sale->allQuantities;
                        ?>
                        <tr>
                          <td><?php echo e($sale->allQuantities); ?></td>
                          <td><a href="/cloth/<?php echo e($sale->pid); ?>"><?php echo e($sale->pname); ?></a></td>
                          <td><?php echo e($sale->category); ?></td>
                          <td><?php echo e($sale->pfor); ?></td>
                          <td><?php echo e($sale->available); ?></td>
                          <td><?php echo e($sale->xs_available); ?></td>
                          <td><?php echo e($sale->s_available); ?></td>
                          <td><?php echo e($sale->m_available); ?></td>
                          <td><?php echo e($sale->l_available); ?></td>
                          <td><?php echo e($sale->xl_available); ?></td>
                          <td><?php echo e($sale->xxl_available); ?></td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xs')||($size->size == 'XS')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 's')||($size->size == 'S')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'm')||($size->size == 'M')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'l')||($size->size == 'L')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xl')||($size->size == 'XL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                            <?php $__currentLoopData = $sizeSalesToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($size->pid == $sale->pid): ?>
                                <?php if(($size->size == 'xxl')||($size->size == 'XXL')): ?>
                                <?php echo e($size->allQuantities); ?>

                                <?php break; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td><?php echo e($sale->price); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->cost); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($sale->offer); ?></td>
                          <td><?php echo e($sale->totalprice); ?> <?php echo e($sale->currency); ?></td>
                          <td><?php echo e($profit); ?> <?php echo e($currency); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <?php if($mostSalesToday!=null): ?>
              <div class="card-footer small text-muted">
                <P>Total Purchases : <?php echo e($totalProduct); ?></P>
                <P>Total Items Sold : <?php echo e($totalItems); ?></P>
                <P>Total Income Today : <?php echo e($netTotal); ?> <?php echo e($currency); ?></P>
                <P>Total Profit Today : <?php echo e($totalprofit); ?> <?php echo e($currency); ?></P>
              </div>
              <?php endif; ?>
            </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Top Buyers
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered table-sm mzs-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>All Quantities</th>
                        <th>Buyers Name</th>
                        <th>Total Revenue</th>
                        <th>Total Profit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($topBuyers!=null): ?>
                        <?php $__currentLoopData = $topBuyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($buyer->allQuantities); ?></td>
                          <td><a href="/user-profile/<?php echo e($buyer->purchasedby); ?>"><?php echo e($buyer->purchasedby); ?></a></td>
                          <td><?php echo e($buyer->totalPrice); ?> Taka</td>
                          <td><?php echo e($buyer->totalprice - $buyer->totalcost); ?> Taka</td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              
            </div>
        </div>
      </div>

      <!-- Example DataTables Card-->
      <div class="card mb-3 mt-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Products </div>
          
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered mzs-table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th scope="col">All Operations</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product For</th>
                  <th scope="col">Product Category</th>
                  <th scope="col">Quantity Available</th>
                  <th scope="col">Size XS</th>
                  <th scope="col">Size S</th>
                  <th scope="col">Size M</th>
                  <th scope="col">Size L</th>
                  <th scope="col">Size XL</th>
                  <th scope="col">Size XXL</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Manufecture Cost</th>
                  <th scope="col">Offer - %</th>
                  <th scope="col">Product Rating</th>
                </tr>
              </thead>
              <tbody>
              
              <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td scope="row">
                    <div class="btn-group btn-group-justified">
                    <a class="btn btn-secondary btn-sm" href="/cloth/<?php echo e($product->pid); ?>">More</a>
                    <a class="ml-1 btn btn-success btn-sm" href="/admin/updateproduct/<?php echo e($product->pid); ?>">Update</a>
                    <form action="/admin/deleteproduct/<?php echo e($product->pid); ?>" method="post" id="delete-product">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <button type="button" class="btn btn-danger btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</button>
                        <div class="dropdown-menu">
                          <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">No</a>
                          <input type="hidden" value="<?php echo e($product->pname); ?>" name="productname"/>
                        </div>
                    </form>
                    </div>
                  </td>
                  <td><a href="/cloth/<?php echo e($product->pname); ?>"><?php echo e($product->pname); ?></a></td>
                  <td><?php echo e($product->pfor); ?></td>
                  <td><?php echo e($product->category); ?></td>
                  <td><?php echo e($product->available); ?></td>
                  <td><?php echo e($product->xs_available); ?></td>
                  <td><?php echo e($product->s_available); ?></td>
                  <td><?php echo e($product->m_available); ?></td>
                  <td><?php echo e($product->l_available); ?></td>
                  <td><?php echo e($product->xl_available); ?></td>
                  <td><?php echo e($product->xxl_available); ?></td>
                  <td><?php echo e($product->price); ?> <?php echo e($product->currency); ?></td>
                  <td><?php echo e($product->cost); ?> <?php echo e($product->currency); ?></td>
                  <td><?php echo e($product->offer); ?></td>
                  <td><?php echo e($product->rating); ?></td>
                  
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © EShop Cloth Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('custom_public/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('custom_public/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('custom_public/js/sb-admin.min.js')); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo e(asset('custom_public/js/sb-admin-datatables.min.js')); ?>"></script>
    
    <!-- My scripts for this page-->
    <script src="<?php echo e(asset('custom_public/js/admin.js')); ?>"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('.msgdiv').fadeOut('slow'); //fast
      }, 5000);

      console.log("Working");
      var chart = <?php echo json_encode($chartDays, 15, 512) ?>;
      var pie = <?php echo json_encode($mostSales, 15, 512) ?>;
      //var app = <?php echo $chartDays; ?>;
      //console.log(chart);
      //console.log(chart.length);

      var chartDates = [];
      var chartValues = [];
      var barValues = [];
      var pieProducts = [];
      var pieValues = [];
      var revenue = 0;
      var expenses = 0;
      var profit = 0;

      for (var item in chart) {
        console.log( chart[item] );
        chartDates.push(chart[item].date);
        chartValues.push(chart[item].allQuantities);
        barValues.push(chart[item].totalprice);
        revenue += Number(chart[item].totalprice);
        expenses += Number(chart[item].totalcost);
        profit += Number(chart[item].totalprice) - Number(chart[item].totalcost);

      }

      console.log( chart );
      console.log( pie );

      // Chart.js scripts
      // -- Set new default font family and font color to mimic Bootstrap's default styling
      Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
      Chart.defaults.global.defaultFontColor = '#292b2c';

      // -- Area Chart Example
      var ctx = document.getElementById("myAreaChart");
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: chartDates,
          datasets: [{
            label: "Item Sold",
            lineTension: 0.3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 20,
            pointBorderWidth: 2,
            data: chartValues,
          }],
        },
        options: {
          scales: {
            xAxes: [{
              time: {
                unit: 'date'
              },
              gridLines: {
                display: false
              },
              ticks: {
                maxTicksLimit: 7
              }
            }],
            yAxes: [{
              ticks: {
                min: 0,
                max: Math.max(...chartValues),
                maxTicksLimit: 5
              },
              gridLines: {
                color: "rgba(0, 0, 0, .125)",
              }
            }],
          },
          legend: {
            display: false
          }
        }
      });
      // -- Bar Chart Example
      var ctx = document.getElementById("myBarChart");
      var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: chartDates,
          datasets: [{
            label: "Revenue Earned",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: barValues,
          }],
        },
        options: {
          scales: {
            xAxes: [{
              time: {
                unit: 'month'
              },
              gridLines: {
                display: false
              },
              ticks: {
                maxTicksLimit: 6
              }
            }],
            yAxes: [{
              ticks: {
                min: 0,
                max: Math.max(...barValues),
                maxTicksLimit: 5
              },
              gridLines: {
                display: true
              }
            }],
          },
          legend: {
            display: false
          }
        }
      });

      document.getElementById("revenue").innerHTML = revenue +" Taka";
      document.getElementById("expenses").innerHTML = expenses +" Taka";
      document.getElementById("profits").innerHTML = profit +" Taka";

      console.log("revenue : "+revenue);
      console.log("expense : "+expenses);
      console.log("profit : "+profit);

      // -- Pie Chart Example
      var ctx = document.getElementById("myPieChart");

      //Dynamic Random color for Pie Chart
      var colors = [];

      var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgb(" + r + "," + g + "," + b + ")";
      };

      for (var i in pie) {
        pieProducts.push(pie[i].pname);
        pieValues.push(pie[i].allQuantities);
        colors.push(dynamicColors());
      }

      var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: pieProducts,
          datasets: [{
            data: pieValues,
            backgroundColor: colors,
          }],
        },
      });


    </script>
  </div>
</body>

</html>
