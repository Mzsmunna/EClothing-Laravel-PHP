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
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
  <!-- Bootstrap core CSS-->
  <link href="{{asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('custom_public/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('custom_public/css/sb-admin.css')}}" rel="stylesheet">
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
            <span class="nav-link-text">Welcome {{ Session::get('admin')}}</span>
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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">{{ Session::get('admin')}}</a>
        </li>
        <li class="breadcrumb-item active">Purchase Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table of Purchase </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Purchase Id</th>
                  <th>Product Id</th>
                  <th>Purchase Date</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Product For</th>
                  <th>Product Quantity</th>
                  <th>Product Price/item</th>
                  <th>Currency</th>
                  <th>Purchased By</th>
                  <th>Purchase Method</th>
                  <th>Purchase Number</th>
                  <th>Purchase Address</th>
                  <th>Total Price</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Purchase Id</th>
                  <th>Product Id</th>
                  <th>Purchase Date</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Product For</th>
                  <th>Product Quantity</th>
                  <th>Product Price/item</th>
                  <th>Currency</th>
                  <th>Purchased By</th>
                  <th>Purchase Method</th>
                  <th>Purchase Number</th>
                  <th>Purchase Address</th>
                  <th>Total Price</th>
                </tr>
              </tfoot>
              <tbody>
              @foreach ($allPurchases as $Purchase )
                <tr>
                  <td>{{$Purchase->prid}}</td>
                  <td>{{$Purchase->pid}}</td>
                  <td>{{$Purchase->date}}</td>
                  <td>{{$Purchase->pname}}</td>
                  <td>{{$Purchase->category}}</td>
                  <td>{{$Purchase->pfor}}</td>
                  <td>{{$Purchase->quantity}}</td>
                  <td>{{$Purchase->price}}</td>
                  <td>{{$Purchase->currency}}</td>
                  <td>{{$Purchase->purchasedby}}</td>
                  <td>{{$Purchase->purchasedmethod}}</td>
                  <td>{{$Purchase->phonenumber}}</td>
                  <td>{{$Purchase->address}}</td>
                  <td>{{$Purchase->totalprice}}</td>
                </tr>
                @endforeach
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
    <script src="{{asset('custom_public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('custom_public/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('custom_public/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('custom_public/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
		<script src="{{asset('custom_public/js/sb-admin-datatables.min.js')}}"></script>
  </div>
</body>

</html>
