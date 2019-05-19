<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clothing -> Product-details</title>

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
        @if(Session::has('admin'))
          <a class="navbar-brand" href="/admin"> Clothing </a>
        @else
          <a class="navbar-brand" href="/"> Clothing </a>
        @endif
        <a class="nav-link" href="/cartlist" id="carticon">
          <i class="fa fa-shopping-cart shopping-cart" style="font-size:24px;color:white"></i>
          <span class="text-white" id="cartitem"></span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              @if(session()->has('message'))
              <div class="alert alert-success text-center" id="msgdiv" role="alert">
                  <strong>{{ session()->get('message') }}</strong>
              </div>
              @endif
              @if($errors->has('loginReq'))
              <div class="alert alert-danger text-center" id="errdiv" role="alert">
                  <strong>{{ $errors->first('loginReq') }}</strong>
              </div>
              @endif
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

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{$product->pfor}}'s Cloth Item :
        <small>{{$product->pname}}</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">{{$product->pfor}}'s Clothing | Cloth Item -> {{$product->pname}}</li>
      </ol>

      <!-- Portfolio Item Row -- Product details and description -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}0.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt="">
        </div>

        <div class="col-md-4" id="{{$product->pid}}">
          <h3 class="my-3">{{$product->pname}} Details</h3>
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
          <h5><div class="product-rating">
              @php 
                $discount = ($product->price * $product->offer)/100;
                $newprice = $product->price - $discount;
              @endphp
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
            @if($product->available<=0)
              <h5 class="text-danger pull-right">OUT OF STOCK</h5>
            @endif
            <p class="card-text">
                <strong> Product For : {{$product->pfor}} </strong></br>
                <strong> Product Category :  {{$product->category}} </strong></br>
                <strong> Product Price :  {{$product->price}} {{$product->currency}} </strong></br>
                <strong> Product Sizes :  {{$product->size}} </strong>
            </p>
            @if(Session::has('admin'))
            <p class="card-text">
              <strong> Manufecture Cost :  {{$product->cost}} {{$product->currency}} </strong></br>
              <strong> Quantity Available :  {{$product->available}} </strong></br>
            </p>
              <!-- Example Pie Chart Card-->
              <div class="card mb-3 mt-2">
                <div class="card-header">
                  <i class="fa fa-pie-chart"></i>Product Sizes Available Pie Chart
                </div>
                <div class="card-body">
                  <canvas id="myPieChart2" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated           yesterday at 11:59 PM
                </div>
            </div>
              <!-- Example Pie Chart Card-->
              <div class="card mb-3 mt-2">
                <div class="card-header">
                  <i class="fa fa-pie-chart"></i> Most Sold Sizes Pie Chart
                </div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated           yesterday at 11:59 PM
                </div>
            </div>
            <a class="mt-2 btn btn-success btn-lg btn-block" href="/admin/updateproduct/{{$product->pid}}" role="button">Edit</a>
            <form action="/admin/deleteproduct/{{$product->pid}}" method="post" id="delete-product">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <button type="button" class="btn btn-danger btn-lg btn-block dropdown-toggle mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</button>
                <div class="dropdown-menu">
                  <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">No</a>
                  <input type="hidden" value="{{$product->pname}}" name="productname"/>
                </div>
            </form>
            @else
            <h5> Give Rating : 
                <div class="ps-star-rating pull-right" style="cursor: pointer">
                  <span class="fa fa-star-o ps" data-rating="1"></span>
                  <span class="fa fa-star-o ps" data-rating="2"></span>
                  <span class="fa fa-star-o ps" data-rating="3"></span>
                  <span class="fa fa-star-o ps" data-rating="4"></span>
                  <span class="fa fa-star-o ps" data-rating="5"></span>
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
              </h5>

              {{-- add to cart , fav , select buttons --}}
              <div class="card-footer">
                <button type="button" class="btn btn-success btn-lg mzs-atc">Add to Cart</button>
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
                
                <a class="mt-2 btn btn-danger btn-lg btn-block" href="/cartlist" role="button">Check Out</a>
                {{-- <button type="button" class="btn btn-light pull-right text-danger love" data-toggle="tooltip" data-placement="bottom" title="Add to favourite"><i class="fa fa-heart-o mzs-atf" style="font-size:24px"></i></button> --}}
  
                {{-- <i class="fa fa-heart" style="font-size:24px"></i> --}}
  
              </div>
              @endif
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">More Images</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}1.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}2.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}3.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../custom_public/uploads/products/{{$product->pname}}/images/{{$product->pname}}4.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment :
          @if(Session::has('admin'))
          @else
          <div class="star-rating pull-right" style="cursor: pointer">
            <span class="fa fa-star-o" data-rating="1"></span>
            <span class="fa fa-star-o" data-rating="2"></span>
            <span class="fa fa-star-o" data-rating="3"></span>
            <span class="fa fa-star-o" data-rating="4"></span>
            <span class="fa fa-star-o" data-rating="5"></span>
            <input type="hidden" name="rating" class="rating-value" value="0">
          </div>
          @endif
        </h5>
        <div class="card-body">
          <form action="/product/comments" method="post" id="comment-box">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
            <input type="hidden" name="product_name" value="{{$product->pname}}"/>
            <input type="hidden" name="nested_of" value="0"/>
            <input type="hidden" name="cmnt_rating" class="cmnt_rating" value="0"/>
            <div class="form-group">
              <textarea class="form-control" rows="3" name="cmnt_text" id="mzs-cmnt_text"></textarea>
            </div>
            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            <input type="submit" class="btn btn-primary" value="Comment" name="comment" />
          </form>
        </div>
      </div>

    @if($allComments!=null)
      <!-- Comment with nested comments -->
      @foreach($allComments as $comment)
      <div class="media mb-4">
        <div style="height:100px; width:100px;">
          @if($comment->cmnter=="Clothing.com")
          <img class="d-flex mr-3 rounded-circle img-thumbnail" src="/custom_public/images/clothing.png" onerror="this.src = '/custom_public/images/user.png'" alt="">
          @else
          <img class="d-flex mr-3 rounded-circle img-thumbnail" src="/custom_public/uploads/users/{{$comment->cmnter}}/profilepic/{{$comment->cmnter}}.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="">
          @endif
        </div>
        <div class="media-body ml-3">
          <h5 class="mt-0"> {{$comment->cmnter}} 
            @if($comment->cmnter == "Clothing.com")
              <i class="fa fa-check-circle text-muted" style="font-size:20px"></i>
            @endif
          </h5>
          <span class="mzs-edit_text">{{$comment->cmnt_text}} </span>

          <!-- Edit Comments Form will be here after adding js hide button-->
          <div class="card my-4 mzs-editbox" style="display: none;">
            <h5 class="card-header">Edit Comment :
              @if(Session::has('admin'))
              @else
              <div class="star-rating pull-right" style="cursor: pointer">
                <span class="fa fa-star-o" data-rating="1"></span>
                <span class="fa fa-star-o" data-rating="2"></span>
                <span class="fa fa-star-o" data-rating="3"></span>
                <span class="fa fa-star-o" data-rating="4"></span>
                <span class="fa fa-star-o" data-rating="5"></span>
                @if(($comment->cmnt_rating==0)||($comment->cmnt_rating==null))
                <input type="hidden" name="rating" class="rating-value" value="0">
                @else
                <input type="hidden" name="rating" class="rating-value" value="{{$comment->cmnt_rating}}">
                @endif
              </div>
              @endif
            </h5>
            <div class="card-body">
              <form action="/product/comment/edit" method="post" class="reply-box">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="cmntid" value="{{$comment->cmntid}}"/>
                <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
                <input type="hidden" name="product_name" value="{{$product->pname}}"/>
                @if(($comment->cmnt_rating==0)||($comment->cmnt_rating==null))
                <input type="hidden" name="cmnt_rating" class="cmnt_rating" value="0"/>
                @else
                <input type="hidden" name="cmnt_rating" class="cmnt_rating" value="{{$comment->cmnt_rating}}"/>
                @endif
                <div class="form-group">
                  <textarea class="form-control mzs-cmnt_text" rows="3" name="cmnt_text"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Update" name="update" />
              </form>
            </div>
          </div>
          
          @if($comment->cmnt_rating>0)
          <span class="blockquote-footer"> 
            @for($i = 1; $i<=floor($comment->cmnt_rating); $i++)
              <span class="fa fa-star" data-rating="{{$i}}"></span>
            @endfor
            @for($i = $comment->cmnt_rating; $i<5; $i++)
              <span class="fa fa-star-o" data-rating="{{$i+1}}"></span>
            @endfor
            <span class="ml-2">{{$comment->cmnt_rating}}</span>
          </span>
          @endif  
          
          <span class="blockquote-footer"> posted at {{$comment->created_time}}   |    {{$comment->created_date}} </span>
          @if(($comment->modified_date!=null)||($comment->modified_time!=null))
          <span class="blockquote-footer"> modified at {{$comment->modified_time}}   |    {{$comment->modified_date}} </span>
          @endif
          <div class="btn-group mt-2">
            <button type="button" class="btn btn-outline-secondary btn-sm mzs-reply">Reply</button>

            @if($comment->cmnted_by == Session::get('uid'))
            <button type="button" class="ml-1 btn btn-outline-success btn-sm mzs-edit">Edit</button>
            @endif
            @if(($comment->cmnted_by == Session::get('uid'))||(Session::has('admin')))
            <!-- Delete Comments -->
            <form action="/product/comment/delete" method="post" class="delete-product-comment">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" value="{{$comment->cmntid}}" name="cmntid"/>
              <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
              <input type="hidden" name="product_name" value="{{$product->pname}}"/>
              <input type="hidden" value="normal" name="cmnt_type"/>
              <button type="button" class="btn btn-outline-danger btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete Comment</button>
                <div class="dropdown-menu">
                  <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">No</a>
                </div>
            </form>
            @elseif(($comment->cmnted_by != Session::get('uid'))&&($comment->cmnter != "Clothing.com"))
              @if(Session::get('user')!="Admin")
                <form action="/notifications" method="post" class="report-product-comment">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" value="Product" name="notify_for"/>
                  <input type="hidden" value="{{$product->pid}}" name="notify_forid"/>
                  <input type="hidden" value="Comment" name="notify_of"/>
                  <input type="hidden" value="{{$comment->cmntid}}" name="notify_ofid"/>
                  <input type="hidden" value="Report on a Comment" name="notify_title"/>
                  <input type="hidden" value="{{Session::get('user')}} has reported a comment of {{$comment->cmnter}} for Product : {{$product->pname}}" name="notify_dtls"/>
                  <input type="hidden" value="Report" name="notify_type"/>
                  <input type="hidden" value="{{Session::get('user')}}" name="notify_by"/>
                  <input type="hidden" value="Admin" name="notify_to"/>
                  <input type="hidden" value="{{$product->pid}}" name="pid"/>
                  <input type="hidden" value="{{$comment->cmntid}}" name="cmntid"/>
                  <button type="button" class="btn btn-outline-warning btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report Comment <i class="fa fa-warning"></i></button>
                    <div class="dropdown-menu">
                      <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">No</a>
                    </div>
                </form>
              @endif
            @endif
          </div>

          <!-- Reply Comments Form will be here after adding js hide button-->
          <div class="card my-4 mzs-replybox" style="display: none;">
            <h5 class="card-header">Reply to {{$comment->cmnter}} :</h5>
            <div class="card-body">
              <form action="/product/comments" method="post" class="reply-box">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <textarea class="form-control mzs-cmnt_text" rows="3" name="cmnt_text"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Reply" name="reply" />
                <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
                <input type="hidden" name="nested_of" value="{{$comment->cmntid}}"/>
                <input type="hidden" name="product_name" value="{{$product->pname}}"/>
                <input type="hidden" name="mention" value="{{$comment->cmnter}}"/>
              </form>
            </div>
          </div>
          
          @if($nestedComments!=null)
            @foreach($nestedComments as $nestedCmnt)
              @if($nestedCmnt->nested_of==$comment->cmntid)
              <div class="media mt-4">
                <div style="height:100px; width:100px;">
                  @if($nestedCmnt->cmnter=="Clothing.com")
                  <img class="d-flex mr-3 rounded-circle img-thumbnail" src="/custom_public/images/clothing.png" onerror="this.src = '/custom_public/images/user.png'" alt="">
                  @else
                  <img class="d-flex mr-3 rounded-circle img-thumbnail" src="/custom_public/uploads/users/{{$nestedCmnt->cmnter}}/profilepic/{{$nestedCmnt->cmnter}}.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="">
                  @endif
                </div>
                <div class="media-body ml-3">
                  <h5 class="mt-0">{{$nestedCmnt->cmnter}} 
                    @if($nestedCmnt->cmnter == "Clothing.com")
                      <i class="fa fa-check-circle text-muted" style="font-size:20px"></i>
                    @endif
                  </h5>
                  <span class="mzs-edit_text-nested">{{$nestedCmnt->cmnt_text}}</span>

                  <!-- Edit Nested Comments Form will be here after adding js hide button-->
                  <div class="card my-4 mzs-editbox-nested" style="display: none;">
                    <h5 class="card-header">Edit Comment :</h5>
                    <div class="card-body">
                      <form action="/product/comment/edit" method="post" class="reply-box">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="cmntid" value="{{$nestedCmnt->cmntid}}"/>
                        <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
                        <input type="hidden" name="product_name" value="{{$product->pname}}"/>
                        <div class="form-group">
                          <textarea class="form-control mzs-cmnt_text" rows="3" name="cmnt_text"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="Update" name="update" />
                      </form>
                    </div>
                  </div>

                  <span class="blockquote-footer"> posted at {{$nestedCmnt->created_time}}   |    {{$nestedCmnt->created_date}} </span>
                  @if(($nestedCmnt->modified_date!=null)||($nestedCmnt->modified_time!=null))
                  <span class="blockquote-footer"> modified at {{$nestedCmnt->modified_time}}   |    {{$nestedCmnt->modified_date}} </span>
                  @endif

                <div class="btn-group mt-2">
                @if($nestedCmnt->cmnted_by == Session::get('uid'))
                  <button type="button" class="btn btn-outline-success btn-sm mzs-edit-nested">Edit</button>
                @endif
                @if(($nestedCmnt->cmnted_by == Session::get('uid'))||(Session::get('admin')))
                  <!-- Delete Nested Comments -->
                  <form action="/product/comment/delete" method="post" class="delete-product-comment">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" value="{{$nestedCmnt->cmntid}}" name="cmntid"/>
                    <input type="hidden" name="cmnt_for" value="{{$product->pid}}"/>
                    <input type="hidden" name="product_name" value="{{$product->pname}}"/>
                    <button type="button" class="btn btn-outline-danger btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete Comment</button>
                      <div class="dropdown-menu">
                        <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">No</a>
                      </div>
                  </form>
                  @elseif(($nestedCmnt->cmnted_by != Session::get('uid'))&&($nestedCmnt->cmnter != "Clothing.com"))
                    @if(Session::get('user')!="Admin")
                      <form action="/notifications" method="post" class="report-product-comment">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" value="Product" name="notify_for"/>
                        <input type="hidden" value="{{$product->pid}}" name="notify_forid"/>
                        <input type="hidden" value="Comment" name="notify_of"/>
                        <input type="hidden" value="{{$nestedCmnt->cmntid}}" name="notify_ofid"/>
                        <input type="hidden" value="Report on a Comment" name="notify_title"/>
                        <input type="hidden" value="{{Session::get('user')}} has reported a comment of {{$nestedCmnt->cmnter}} for Product : {{$product->pname}}" name="notify_dtls"/>
                        <input type="hidden" value="Report" name="notify_type"/>
                        <input type="hidden" value="{{Session::get('user')}}" name="notify_by"/>
                        <input type="hidden" value="Admin" name="notify_to"/>
                        <input type="hidden" value="{{$product->pid}}" name="pid"/>
                        <input type="hidden" value="{{$nestedCmnt->cmntid}}" name="cmntid"/>
                        <button type="button" class="btn btn-outline-warning btn-sm dropdown-toggle ml-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report Comment <i class="fa fa-warning"></i></button>
                          <div class="dropdown-menu">
                            <input class="dropdown-item" type="submit" value="Yes" name="yes"/>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">No</a>
                          </div>
                      </form>
                    @endif
                  @endif
                </div>
                  
                </div>
              </div>
              @endif
            @endforeach
          @endif

        </div>
      </div>
      @endforeach
    @endif

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
    <!-- Core plugin JavaScript-->
    <script src="{{asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('custom_public/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('custom_public/product-details.js')}}"></script>
    <script src="{{asset('custom_public/pd-addtocart.js')}}"></script>
    <script type="text/javascript">
      setTimeout(function() {
          $('#msgdiv').fadeOut('slow'); //fast
      }, 5000);

      setTimeout(function() {
          $('#errdiv').fadeOut('slow'); //fast
      }, 5000);

        var pie = @json($soldouts);
        var pie2 = @json($product);
        console.log(pie);
        var pieSizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
        var pieValues = [];
        var pieValues2 = [];

        // -- Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var cty = document.getElementById("myPieChart2");

        //Dynamic Random color for Pie Chart
        var colors = [];

        var dynamicColors = function() {
          var r = Math.floor(Math.random() * 255);
          var g = Math.floor(Math.random() * 255);
          var b = Math.floor(Math.random() * 255);
          return "rgb(" + r + "," + g + "," + b + ")";
        };

        pieValues.push(pie[0].xs_sold);
        pieValues.push(pie[0].s_sold);
        pieValues.push(pie[0].m_sold);
        pieValues.push(pie[0].l_sold);
        pieValues.push(pie[0].xl_sold);
        pieValues.push(pie[0].xxl_sold);

        pieValues2.push(pie2.xs_available);
        pieValues2.push(pie2.s_available);
        pieValues2.push(pie2.m_available);
        pieValues2.push(pie2.l_available);
        pieValues2.push(pie2.xl_available);
        pieValues2.push(pie2.xxl_available);
        
        for(var i=0; i<6; i++)
        {
          colors.push(dynamicColors());
        }

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: pieSizes,
                datasets: [{
                data: pieValues,
                backgroundColor: colors,
                }],
            },
        });

        var myPieChart2 = new Chart(cty, {
            type: 'pie',
            data: {
                labels: pieSizes,
                datasets: [{
                data: pieValues2,
                backgroundColor: colors,
                }],
            },
        });
    </script>

  </body>

</html>
