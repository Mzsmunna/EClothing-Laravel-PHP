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
  <!-- Material icon core CSS-->
  <link href="{{asset('custom_public/vendor/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('custom_public/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('custom_public/css/sb-admin.css')}}" rel="stylesheet">
  <!-- My styles for this template-->
  <link href="{{asset('custom_public/css/admin.css')}}" rel="stylesheet">
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
            @if($allMessages!=null)
            @foreach($allMessages as $message)
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/admin/msgfrom/{{$message->msg_from}}">
              <strong>{{$message->msg_from}}</strong>
              <span class="small float-right text-muted"> {{$message->send_time}} | {{$message->send_date}}</span>
              <div class="dropdown-message small">{{$message->message}}</div>
            </a>
            @endforeach
            @endif
            <div class="dropdown-divider"></div>
            {{-- <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="/allmessages">View all messages</a> --}}
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
            @if($notifications!=null)
            @foreach($notifications as $notify)
            @if($notify->notify_to=="Admin")
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/cloth/{{$notify->notify_forid}}">
              <span class="text-warning">
                <strong>
                  <i class="fa fa-warning"></i> <span class="small float-right text-muted">{{$notify->notify_time}} | {{$notify->notify_date}}</span>
                  <p>{{$notify->notify_title}}</p>
                </strong>
              </span>
              {{-- <div class="dropdown-message small">{{$notify->notify_dtls}}</div> --}}
            </a>
            <div class="container-fluid small">{{$notify->notify_dtls}}</div>
            @endif
            @endforeach
            @endif
            <div class="dropdown-divider"></div>
            {{-- <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a> --}}
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
      @if(session()->has('message'))
      <div class="alert alert-success text-center msgdiv">
          <strong>{{ session()->get('message') }}</strong>
      </div>
      @endif
      @if($errors->has('oops'))
      <div class="alert alert-danger text-center msgdiv">
          <strong>{{ $errors->first('oops') }}</strong>
      </div>
      @endif
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">{{ Session::get('admin')}}</a>
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
                    <h5 class="font-weight-medium text-right mb-0">{{$allRecords->totalPrice - $allRecords->totalCost}} TK.</h5>
                      <p class="text-muted small mt-3 mb-0"> Investment : {{($allRecords->totalQuantity + $allRecords->totalSales)*$allRecords->totalCost}} TK.
                      </p>
                  </div>
                </div>
              </div>
              <p class="text-muted small mt-3 mb-0">
                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Costs : {{$allRecords->totalCost}} | Earning : {{$allRecords->totalPrice}}
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
                    <h5 class="font-weight-medium text-right mb-0">{{$allRecords->totalProducts}}</h5>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Quantity : {{$allRecords->totalQuantity}} 
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
                    <h5 class="font-weight-medium text-right mb-0">{{$allRecords->totalSales}}</h5>
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
                    <h5 class="font-weight-medium text-right mb-0">{{$allRecords->totalCustomers}}</h5>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Admin : {{$allRecords->totalAdmins}} 
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
                    @if($purchasesAll!=null)
                      @php
                        $pNo = count($purchasesAll);
                        $netTotal = 0;
                        $totalItems = 0;
                        $profit = 0;
                        $totalprofit = 0;
                        $currency = "Taka";
                      @endphp
                      @foreach ($purchasesAll as $purchase )
                      @php
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
                      @endphp
                      <tr>
                        <td>{{$purchase->date}}</td>
                        <td><a href="/cloth/{{$purchase->pid}}">{{$purchase->pname}}</a></td>
                        <td>{{$purchase->category}}</td>
                        <td>{{$purchase->pfor}}</td>
                        <td>{{$purchase->size}}</td>
                        <td>{{$purchase->quantity}}</td>
                        <td>{{$purchase->price}} {{$purchase->currency}}</td>
                        <td>{{$purchase->cost}} {{$purchase->currency}}</td>
                        <td>{{$purchase->quantity}}</td>
                        <td>{{$purchase->totalprice}} {{$purchase->currency}}</td>
                        <td>{{$profit}} {{$currency}}</td>
                        <td><a href="/user-profile/{{$purchase->purchasedby}}">{{$purchase->purchasedby}}</a></td>
                        <td>{{$purchase->purchasedmethod}}</td>
                        <td>{{$purchase->phonenumber}}</td>
                        <td>{{$purchase->address}}</td>
                      </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              @if($purchasesAll!=null)
                <div class="card-footer small text-muted">
                  <P>Total Purchases : {{$pNo}}</P>
                  <P>Total Items Sold : {{$totalItems}}</P>
                  <P>Total Income : {{$netTotal}} {{$currency}}</P>
                  <P>Total Profit : {{$totalprofit}} {{$currency}}</P>
                </div>
              @endif
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
                      @if($mostSales!=null)
                        @php
                          $totalProduct = count($mostSales);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        @endphp
                        @foreach ($mostSales as $sale )
                        @php
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
                        @endphp
                        <tr>
                          <td>{{$sale->allQuantities}}</td>
                          <td><a href="/cloth/{{$sale->pid}}">{{$sale->pname}}</a></td>
                          <td>{{$sale->category}}</td>
                          <td>{{$sale->pfor}}</td>
                          <td>{{$sale->available}}</td>
                          <td>{{$sale->xs_available}}</td>
                          <td>{{$sale->s_available}}</td>
                          <td>{{$sale->m_available}}</td>
                          <td>{{$sale->l_available}}</td>
                          <td>{{$sale->xl_available}}</td>
                          <td>{{$sale->xxl_available}}</td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xs')||($size->size == 'XS'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 's')||($size->size == 'S'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'm')||($size->size == 'M'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'l')||($size->size == 'L'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xl')||($size->size == 'XL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSales as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xxl')||($size->size == 'XXL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>{{$sale->price}} {{$sale->currency}}</td>
                          <td>{{$sale->cost}} {{$sale->currency}}</td>
                          <td>{{$sale->offer}}</td>
                          <td>{{$sale->totalprice}} {{$sale->currency}}</td>
                          <td>{{$profit}} {{$currency}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              @if($mostSales!=null)
              <div class="card-footer small text-muted">
                <P>Total Product Purchased : {{$totalProduct}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
              </div>
              @endif
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
                    @if($purchasesY!=null)
                      @php
                        $pyNo = count($purchasesY);
                        $netTotal = 0;
                        $totalItems = 0;
                        $profit = 0;
                        $totalprofit = 0;
                        $currency = "Taka";
                      @endphp
                      @foreach ($purchasesY as $ypurchase )
                      @php
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
                      @endphp
                      <tr>
                        <td><a href="/cloth/{{$ypurchase->pid}}">{{$ypurchase->pname}}</a></td>
                        <td>{{$ypurchase->category}}</td>
                        <td>{{$ypurchase->pfor}}</td>
                        <td>{{$ypurchase->size}}</td>
                        <td>{{$ypurchase->quantity}}</td>
                        <td>{{$ypurchase->price}} {{$ypurchase->currency}}</td>
                        <td>{{$ypurchase->cost}} {{$ypurchase->currency}}</td>
                        <td>{{$ypurchase->quantity}}</td>
                        <td>{{$ypurchase->totalprice}} {{$ypurchase->currency}}</td>
                        <td>{{$profit}} {{$currency}}</td>
                        <td><a href="/user-profile/{{$ypurchase->purchasedby}}">{{$ypurchase->purchasedby}}</a></td>
                        <td>{{$ypurchase->purchasedmethod}}</td>
                        <td>{{$ypurchase->phonenumber}}</td>
                        <td>{{$ypurchase->address}}</td>
                      </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              @if($purchasesY!=null)
                <div class="card-footer small text-muted">
                  <P>Total Purchases : {{$pyNo}}</P>
                  <P>Total Items Sold : {{$totalItems}}</P>
                  <P>Total Income yesterday : {{$netTotal}} {{$currency}}</P>
                  <P>Total Profit yesterday : {{$totalprofit}} {{$currency}}</P>
                </div>
              @endif
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
                        @if($purchasesT!=null)
                          @php
                            $ptNo = count($purchasesT);
                            $netTotal = 0;
                            $totalItems = 0;
                            $profit = 0;
                            $totalprofit = 0;
                            $currency = "Taka";
                          @endphp
                          @foreach ($purchasesT as $tpurchase )
                          @php
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
                          @endphp
                          <tr>
                            <td><a href="/cloth/{{$tpurchase->pid}}">{{$tpurchase->pname}}</a></td>
                            <td>{{$tpurchase->category}}</td>
                            <td>{{$tpurchase->pfor}}</td>
                            <td>{{$tpurchase->size}}</td>
                            <td>{{$tpurchase->quantity}}</td>
                            <td>{{$tpurchase->price}} {{$tpurchase->currency}}</td>
                            <td>{{$tpurchase->cost}} {{$tpurchase->currency}}</td>
                            <td>{{$tpurchase->offer}}</td>
                            <td>{{$tpurchase->totalprice}} {{$tpurchase->currency}}</td>
                            <td>{{$profit}} {{$currency}}</td>
                            <td><a href="/user-profile/{{$tpurchase->purchasedby}}">{{$tpurchase->purchasedby}}</a></td>
                            <td>{{$tpurchase->purchasedmethod}}</td>
                            <td>{{$tpurchase->phonenumber}}</td>
                            <td>{{$tpurchase->address}}</td>
                          </tr>
                          @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                @if($purchasesT!=null)
                <div class="card-footer small text-muted">
                  <P>Total Purchases : {{$ptNo}}</P>
                  <P>Total Items Sold : {{$totalItems}}</P>
                  <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                  <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
                </div>
                @endif
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
                      @if($sevenDays!=null)
                        @php
                          $dNo = count($sevenDays);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        @endphp
                        @foreach ($sevenDays as $day )
                        @php
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
                        @endphp
                        <tr>
                          <td>{{$day->date}}</td>
                          <td><a href="/cloth/{{$day->pid}}">{{$day->pname}}</a></td>
                          <td>{{$day->category}}</td>
                          <td>{{$day->pfor}}</td>
                          <td>{{$day->size}}</td>
                          <td>{{$day->quantity}}</td>
                          <td>{{$day->price}} {{$day->currency}}</td>
                          <td>{{$day->cost}} {{$day->currency}}</td>
                          <td>{{$day->offer}}</td>
                          <td>{{$day->totalprice}} {{$day->currency}}</td>
                          <td>{{$profit}} {{$currency}}</td>
                          <td><a href="/user-profile/{{$day->purchasedby}}">{{$day->purchasedby}}</a></td>
                          <td>{{$day->purchasedmethod}}</td>
                          <td>{{$day->phonenumber}}</td>
                          <td>{{$day->address}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              @if($sevenDays!=null)
              <div class="card-footer small text-muted">
                <P>Total Purchases : {{$dNo}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
                <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
              </div>
              @endif
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
                      @if($thirtyDays!=null)
                        @php
                          $dNo = count($thirtyDays);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        @endphp
                        @foreach ($thirtyDays as $day )
                        @php
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
                        @endphp
                        <tr>
                          <td>{{$day->date}}</td>
                          <td><a href="/cloth/{{$day->pid}}">{{$day->pname}}</a></td>
                          <td>{{$day->category}}</td>
                          <td>{{$day->pfor}}</td>
                          <td>{{$day->size}}</td>
                          <td>{{$day->quantity}}</td>
                          <td>{{$day->price}} {{$day->currency}}</td>
                          <td>{{$day->cost}} {{$day->currency}}</td>
                          <td>{{$day->offer}}</td>
                          <td>{{$day->totalprice}} {{$day->currency}}</td>
                          <td>{{$profit}} {{$currency}}</td>
                          <td><a href="/user-profile/{{$day->purchasedby}}">{{$day->purchasedby}}</a></td>
                          <td>{{$day->purchasedmethod}}</td>
                          <td>{{$day->phonenumber}}</td>
                          <td>{{$day->address}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              @if($thirtyDays!=null)
              <div class="card-footer small text-muted">
                <P>Total Purchases : {{$dNo}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
                <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
              </div>
              @endif
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
                      @if($mostSalesYesterday!=null)
                        @php
                          $totalProduct = count($mostSalesYesterday);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        @endphp
                        @foreach ($mostSalesYesterday as $sale )
                        @php
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
                        @endphp
                        <tr>
                          <td>{{$sale->allQuantities}}</td>
                          <td><a href="/cloth/{{$sale->pid}}">{{$sale->pname}}</a></td>
                          <td>{{$sale->category}}</td>
                          <td>{{$sale->pfor}}</td>
                          <td>{{$sale->available}}</td>
                          <td>{{$sale->xs_available}}</td>
                          <td>{{$sale->s_available}}</td>
                          <td>{{$sale->m_available}}</td>
                          <td>{{$sale->l_available}}</td>
                          <td>{{$sale->xl_available}}</td>
                          <td>{{$sale->xxl_available}}</td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xs')||($size->size == 'XS'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 's')||($size->size == 'S'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'm')||($size->size == 'M'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'l')||($size->size == 'L'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xl')||($size->size == 'XL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesYesterday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xxl')||($size->size == 'XXL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>{{$sale->price}} {{$sale->currency}}</td>
                          <td>{{$sale->cost}} {{$sale->currency}}</td>
                          <td>{{$sale->offer}}</td>
                          <td>{{$sale->totalprice}} {{$sale->currency}}</td>
                          <td>{{$profit}} {{$currency}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              @if($mostSalesYesterday!=null)
              <div class="card-footer small text-muted">
                <P>Total Product Purchased : {{$totalProduct}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
                <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
              </div>
              @endif
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
                      @if($mostSalesToday!=null)
                        @php
                          $totalProduct = count($mostSalesToday);
                          $netTotal = 0;
                          $totalItems = 0;
                          $profit = 0;
                          $totalprofit = 0;
                          $currency = "Taka";
                        @endphp
                        @foreach ($mostSalesToday as $sale )
                        @php
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
                        @endphp
                        <tr>
                          <td>{{$sale->allQuantities}}</td>
                          <td><a href="/cloth/{{$sale->pid}}">{{$sale->pname}}</a></td>
                          <td>{{$sale->category}}</td>
                          <td>{{$sale->pfor}}</td>
                          <td>{{$sale->available}}</td>
                          <td>{{$sale->xs_available}}</td>
                          <td>{{$sale->s_available}}</td>
                          <td>{{$sale->m_available}}</td>
                          <td>{{$sale->l_available}}</td>
                          <td>{{$sale->xl_available}}</td>
                          <td>{{$sale->xxl_available}}</td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xs')||($size->size == 'XS'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 's')||($size->size == 'S'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'm')||($size->size == 'M'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'l')||($size->size == 'L'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xl')||($size->size == 'XL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach ($sizeSalesToday as $size)
                              @if($size->pid == $sale->pid)
                                @if(($size->size == 'xxl')||($size->size == 'XXL'))
                                {{$size->allQuantities}}
                                @break
                                @endif
                              @endif
                            @endforeach
                          </td>
                          <td>{{$sale->price}} {{$sale->currency}}</td>
                          <td>{{$sale->cost}} {{$sale->currency}}</td>
                          <td>{{$sale->offer}}</td>
                          <td>{{$sale->totalprice}} {{$sale->currency}}</td>
                          <td>{{$profit}} {{$currency}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              @if($mostSalesToday!=null)
              <div class="card-footer small text-muted">
                <P>Total Purchases : {{$totalProduct}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
                <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
              </div>
              @endif
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
                      @if($topBuyers!=null)
                        @foreach ($topBuyers as $buyer )
                        <tr>
                          <td>{{$buyer->allQuantities}}</td>
                          <td><a href="/user-profile/{{$buyer->purchasedby}}">{{$buyer->purchasedby}}</a></td>
                          <td>{{$buyer->totalPrice}} Taka</td>
                          <td>{{$buyer->totalprice - $buyer->totalcost}} Taka</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
              {{-- @if($topBuyers!=null)
              <div class="card-footer small text-muted">
                <P>Total Purchases : {{$dNo}}</P>
                <P>Total Items Sold : {{$totalItems}}</P>
                <P>Total Income Today : {{$netTotal}} {{$currency}}</P>
                <P>Total Profit Today : {{$totalprofit}} {{$currency}}</P>
              </div>
              @endif --}}
            </div>
        </div>
      </div>

      <!-- Example DataTables Card-->
      <div class="card mb-3 mt-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Products </div>
          {{-- <a class="btn btn-success btn-md pull-right" href="/admin/addproduct">Add Product</a> --}}
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
              {{-- <% for(var i=0;i<list.length;i++){%> --}}
              @foreach ($allProducts as $product )
                <tr>
                  <td scope="row">
                    <div class="btn-group btn-group-justified">
                    <a class="btn btn-secondary btn-sm" href="/cloth/{{$product->pid}}">More</a>
                    <a class="ml-1 btn btn-success btn-sm" href="/admin/updateproduct/{{$product->pid}}">Update</a>
                    <form action="/admin/deleteproduct/{{$product->pid}}" method="post" id="delete-product">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <button type="button" class="btn btn-danger btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</button>
                        <div class="dropdown-menu">
                          <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">No</a>
                          <input type="hidden" value="{{$product->pname}}" name="productname"/>
                        </div>
                    </form>
                    </div>
                  </td>
                  <td><a href="/cloth/{{$product->pname}}">{{$product->pname}}</a></td>
                  <td>{{$product->pfor}}</td>
                  <td>{{$product->category}}</td>
                  <td>{{$product->available}}</td>
                  <td>{{$product->xs_available}}</td>
                  <td>{{$product->s_available}}</td>
                  <td>{{$product->m_available}}</td>
                  <td>{{$product->l_available}}</td>
                  <td>{{$product->xl_available}}</td>
                  <td>{{$product->xxl_available}}</td>
                  <td>{{$product->price}} {{$product->currency}}</td>
                  <td>{{$product->cost}} {{$product->currency}}</td>
                  <td>{{$product->offer}}</td>
                  <td>{{$product->rating}}</td>
                  
                </tr>
                @endforeach
              {{-- <% } %> --}}
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
    <script src="{{asset('custom_public/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('custom_public/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('custom_public/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('custom_public/js/sb-admin-datatables.min.js')}}"></script>
    {{-- <script src="{{asset('custom_public/js/sb-admin-charts.js')}}"></script> --}}
    <!-- My scripts for this page-->
    <script src="{{asset('custom_public/js/admin.js')}}"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('.msgdiv').fadeOut('slow'); //fast
      }, 5000);

      console.log("Working");
      var chart = @json($chartDays);
      var pie = @json($mostSales);
      //var app = {!!$chartDays!!};
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
