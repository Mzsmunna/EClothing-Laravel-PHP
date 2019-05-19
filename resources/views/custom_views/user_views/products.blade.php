<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothing -> Products</title>

    <!-- Laravel core CSS -->
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->

    <!-- Bootstrap core CSS -->
    <link href="{{asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
  <link href="{{asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('custom_public/css/modern-business.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"> Clothing </a>
        <a class="nav-link" href="/cartlist" id="carticon">
          <i class="fa fa-shopping-cart shopping-cart" style="font-size:24px;color:white"></i>
          <span class="text-white" id="cartitem"></span>
        </a>
        <!-- <button type="button" class="btn btn-dark btn-sm" id="cart-btn">
          <i class="fa fa-shopping-cart" style="font-size:24px;color:white"></i>
          <span class="text-white" id="cartitem"></span>
        </button>  -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0 mr-lg-2">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Type to Search..." id="nam" />
                </div>
              </form>
            </li>
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
            @if(Session::has('admin'))
            <li class="nav-item">
            <a class="nav-link" href="/admin">{{ Session::get('user')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            @elseif(Session::has('user'))
            <li class="nav-item">
            <a class="nav-link" href="/user-profile/{{ Session::get('user')}}">{{ Session::get('user')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/login">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <input type="hidden" name="title" value="{{$title}}"/>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{ $title }}
        <small>Items</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
      
      
      <div class="row">
      @foreach ($allProducts as $product )
      @if($product->available>0)
        {{-- <div class="col-lg-4 col-sm-6 portfolio-item" > --}}
        <div class="col-lg-4 col-sm-6 portfolio-item" id="{{$product->pid}}">
          <input type="hidden" name="pid" value="{{$product->pid}}"/>
          <input type="hidden" name="pname" value="{{$product->pname}}"/>
          <input type="hidden" name="pfor" value="{{$product->pfor}}"/>
          <input type="hidden" name="category" value="{{$product->category}}"/>
          <input type="hidden" name="size" value="{{$product->size}}"/>
          <input type="hidden" name="available" value="{{$product->available}}"/>
          <input type="hidden" name="qavailable" value="{{$product->available}}"/>
          <input type="hidden" name="xsavailable" value="{{$product->xs_available}}"/>
          <input type="hidden" name="savailable" value="{{$product->s_available}}"/>
          <input type="hidden" name="mavailable" value="{{$product->m_available}}"/>
          <input type="hidden" name="lavailable" value="{{$product->l_available}}"/>
          <input type="hidden" name="xlavailable" value="{{$product->xl_available}}"/>
          <input type="hidden" name="xxlavailable" value="{{$product->xxl_available}}"/>
          @if(($product->offer==0)||($product->offer==null))
          <input type="hidden" name="price" value="{{$product->price}}"/>
          @else
            @php 
            $discount = ($product->price * $product->offer)/100;
            $newprice = $product->price - $discount;
            @endphp
            <input type="hidden" name="price" value="{{$newprice}}"/>
          @endif
          <input type="hidden" name="cost" value="{{$product->cost}}"/>
          <input type="hidden" name="currency" value="{{$product->currency}}"/>
          <input type="hidden" name="offer" value="{{$product->offer}}"/>
          <div class="card h-100 item">
            <a href="/cloth/{{$product->pid}}"><img class="card-img-top" src="custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}0.jpg" onerror="this.src = 'custom_public/images/products.jpg'" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/cloth/{{$product->pid}}">{{$product->pname}}</a>
              </h4>
              <h5><div class="product-rating">
                {{-- floor(0.60) --}}
                @if(floor($product->rating)>0)
                  @for($i = 1; $i<=floor($product->rating); $i++)
                    <span class="fa fa-star" data-rating="{{$i}}"></span>
                  @endfor
                  @for($i = floor($product->rating); $i<5; $i++)
                    <span class="fa fa-star-o" data-rating="{{$i+1}}"></span>
                  @endfor
                  <span class="ml-2">{{round($product->rating,2)}}</span>
                @endif
                
                @if(($product->rating==0)||($product->rating==null))
                  <input type="hidden" name="rating" class="rating-value" value="0">
                @else
                  <input type="hidden" name="rating" class="rating-value" value="{{$product->rating}}">
                @endif
              </div></h5>
              @if(($product->offer==0)||($product->offer==null))
              <h5>{{$product->price}} {{$product->currency}}</h5>
              @else
              <h5><strike>{{$product->price}} {{$product->currency}}</strike> <span class="ml-1">{{$newprice}} {{$product->currency}}</span><span class="pull-right text-danger">{{$product->offer}}% off</span></h5>
              @endif
              <p class="card-text">
                <strong>Product For : {{$product->pfor}} </strong></br>
                <strong>Product Category :  {{$product->category}} </strong></br>
                {{-- Product Price :  {{$product->price}} {{$product->currency}} </br>
                Product Size :  {{$product->size}} --}}
              </p>
              
            </div>
            @if(Session::has('admin'))
            @else
            <div class="card-footer">
              <h6> Give Rating : 
                <div class="star-rating pull-right" style="cursor: pointer">
                  <span class="fa fa-star-o" data-rating="1"></span>
                  <span class="fa fa-star-o" data-rating="2"></span>
                  <span class="fa fa-star-o" data-rating="3"></span>
                  <span class="fa fa-star-o" data-rating="4"></span>
                  <span class="fa fa-star-o" data-rating="5"></span>
                  @php
                   $found = false;   
                  @endphp
                  @foreach($ratings as $rating)
                    @if($rating->pid==$product->pid)
                      <input type="hidden" name="rating" class="rating-value" value="{{$rating->rating}}">
                      @php
                        $found = true; 
                      @endphp
                      @break
                    @endif
                  @endforeach
                  @if($found == false)
                    <input type="hidden" name="rating" class="rating-value" value="0">
                  @endif
                </div>
              </h6>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-success btn-sm mzs-atc">Add to Cart</button>
              <select class="allsizes" name="allsizes">
                <option value="{{$product->available}}">Size</option>
                @if(($product->xs_available!=null)||($product->xs_available!=0))
                <option value="{{$product->xs_available}}">XS</option>
                @endif
                @if(($product->s_available!=null)||($product->s_available!=0))
                <option value="{{$product->s_available}}">S</option>
                @endif
                @if(($product->m_available!=null)||($product->m_available!=0))
                <option value="{{$product->m_available}}">M</option>
                @endif
                @if(($product->l_available!=null)||($product->l_available!=0))
                <option value="{{$product->l_available}}">L</option>
                @endif
                @if(($product->xl_available!=null)||($product->xl_available!=0))
                <option value="{{$product->xl_available}}">XL</option>
                @endif
                @if(($product->xxl_available!=null)||($product->xxl_available!=0))
                <option value="{{$product->xxl_available}}">XXL</option>
                @endif
              </select>
              <input class="quantity" type="number" name="quantity" min="1" max="{{$product->available}}" value="1">
              @php
                $found = false;   
              @endphp
              @foreach($favourites as $favourite)
                @if($favourite->pid==$product->pid)
                  <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Added as favourite"><i class="fa fa-heart mzs-atf" style="font-size:24px"></i></button>
                  @php
                    $found = true; 
                  @endphp
                  @break
                @endif
              @endforeach
              @if($found == false)
                <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Add to favourite"><i class="fa fa-heart-o mzs-atf" style="font-size:24px"></i></button>
              @endif

              {{-- <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Add to favourite"><i class="fa fa-heart-o mzs-atf" style="font-size:24px"></i></button> --}}

              {{-- <i class="fa fa-heart" style="font-size:24px"></i> --}}

            </div>
            @endif
          </div>
        </div>
        @endif
        @endforeach
      </div>
      

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

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
    <script src="{{asset('custom_public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('custom_public/addtocart.js')}}"></script>
    <script src="{{asset('custom_public/search.js')}}"></script>
  </body>

</html>
