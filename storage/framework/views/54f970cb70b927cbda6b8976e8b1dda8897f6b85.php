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
  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo e(asset('custom_public/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('custom_public/css/sb-admin.css')); ?>" rel="stylesheet">
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
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for..." id="searchbox" />
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="search-user">
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
      <div class="alert alert-success text-center" id="msgdiv">
          <strong><?php echo e(session()->get('message')); ?></strong>
      </div>
      <?php endif; ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"><?php echo e(Session::get('admin')); ?></a>
        </li>
        <li class="breadcrumb-item active">User Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table of User 
          <div class="btn-group btn-group-justified pull-right">
              <a class="btn btn-success btn-md" href="/admin/adduser/User">Add new User</a>
              <a class="btn btn-primary btn-md ml-1" href="/admin/adduser/Admin">Assign new Admin</a>
          </div>
        </div>
          
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th scope="col">All Operations</th>
                  <th scope="col">Username</th>
                  <th scope="col">User Firstname</th>
                  <th scope="col">User Lastname</th>
                  <th scope="col">User Email</th>
                  <th scope="col">User Password</th>
                  <th scope="col">User Gender</th>
                  <th scope="col">User Date of Birth</th>
                  <th scope="col">User Phone Number</th>
                  <th scope="col">User Country</th>
                  <th scope="col">User City</th>
                  <th scope="col">User Area</th>
                  <th scope="col">User Address</th>
                  <th scope="col">User Account Type</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th scope="col">All Operations</th>
                  <th scope="col">Username</th>
                  <th scope="col">User Firstname</th>
                  <th scope="col">User Lastname</th>
                  <th scope="col">User Email</th>
                  <th scope="col">User Gender</th>
                  <th scope="col">User Date of Birth</th>
                  <th scope="col">User Phone Number</th>
                  <th scope="col">User Country</th>
                  <th scope="col">User City</th>
                  <th scope="col">User Area</th>
                  <th scope="col">User Address</th>
                  <th scope="col">User Account Type</th>
                </tr>
              </tfoot>
              <tbody>
              <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <div class="btn-group btn-group-justified">
                    <a class="btn btn-success btn-sm" href="/admin/updateuser/<?php echo e($User->id); ?>">Update</a>
                    <form action="/admin/deleteuser/<?php echo e($User->id); ?>" method="post" id="delete-product">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <button type="button" class="btn btn-danger btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</button>
                        <div class="dropdown-menu">
                          <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">No</a>
                        </div>
                    </form>
                    </div>
                  </td>
                  <td scope="row"><a href="/user-profile/<?php echo e($User->username); ?>"><?php echo e($User->username); ?></a></td>
                  <td><?php echo e($User->firstname); ?></td>
                  <td><?php echo e($User->lastname); ?></td>
                  <td><?php echo e($User->email); ?></td>
                  <td><?php echo e($User->gender); ?></td>
                  <td><?php echo e($User->dob); ?></td>
                  <td><?php echo e($User->phonenumber); ?></td>
                  <td><?php echo e($User->country); ?></td>
                  <td><?php echo e($User->city); ?></td>
                  <td><?php echo e($User->area); ?></td>
                  <td><?php echo e($User->address); ?></td>
                  <td><?php echo e($User->accounttype); ?></td>
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
    <script src="<?php echo e(asset('custom_public/vendor/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('custom_public/js/sb-admin.min.js')); ?>"></script>
    <!-- Custom scripts for this page-->
		<script src="<?php echo e(asset('custom_public/js/sb-admin-datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/search.js')); ?>"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('#msgdiv').fadeOut('slow'); //fast
      }, 5000);
    </script>
  </div>
</body>

</html>
