<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
  <title>Profile</title>
  <!-- Laravel core CSS -->
  <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('custom_public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('custom_public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

  <link href="<?php echo e(asset('custom_public/css/chatroom.css')); ?>" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container position-relative">
            <?php if(Session::has('admin')): ?>
            <a class="navbar-brand" href="/admin"> Clothing </a>
            <?php else: ?>
            <a class="navbar-brand" href="/"> Clothing </a>
            <?php endif; ?>
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

    <div class="container" style="padding-top: 70px;">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success text-center mzs-alert-div" id="msgdiv">
            <strong><?php echo e(session()->get('message')); ?></strong>
        </div>
        <?php endif; ?>
        <?php if($errors->has('uploadErr')): ?>
        <div class="alert alert-danger text-center mzs-alert-div" id="errpic" role="alert">
            <strong><?php echo e($errors->first('uploadErr')); ?></strong>
        </div>
        <?php endif; ?>
        <?php if($errors->has('updateErr')): ?>
        <div class="alert alert-danger text-center mzs-alert-div" id="errdiv" role="alert">
            <strong><?php echo e($errors->first('updateErr')); ?></strong>
        </div>
        <?php endif; ?>
        <?php if(!empty($errors->first())): ?>
        <div class="alert alert-danger text-center mzs-alert-div" id="errsdiv" role="alert">
            <strong><?php echo e($errors->first()); ?></strong>
        </div>
            
        <?php endif; ?>
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                    </li>
                    <?php if(Session::has('admin')): ?>
                    <li class="nav-item">
                        <a href="" data-target="#purchases" data-toggle="tab" class="nav-link">Customer's Purchases</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#favourites" data-toggle="tab" class="nav-link">Customer's Favourites</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="" data-target="#purchases" data-toggle="tab" class="nav-link">My Purchases</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#favourites" data-toggle="tab" class="nav-link">My Favourites</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit Info</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="text-capitalize mb-3"><?php echo e($user[0]->username); ?>'s Profile</h5>
                        <div class="row">
                            <div class="col-md-6 text-capitalize">
                                
                                <h6>About</h6>
                                <p>
                                    Full Name : <?php echo e($user[0]->firstname); ?> <?php echo e($user[0]->lastname); ?>

                                </p>
                                <p>
                                    Gender : <?php echo e($user[0]->gender); ?>

                                </p>
                                <p>
                                    Date of Birth : <?php echo e($user[0]->dob); ?>

                                </p>
                                <p>
                                    Email : <?php echo e($user[0]->email); ?>

                                </p>
                                <p>
                                    Phone Number : <?php echo e($user[0]->phonenumber); ?>

                                </p>
                                <p>
                                    Address : <?php echo e($user[0]->country); ?>, <?php echo e($user[0]->city); ?>, <?php echo e($user[0]->area); ?>, <?php echo e($user[0]->address); ?>

                                </p>
                                
                            </div>
                            <div class="col-md-6">
                                <?php
                                    $revenue = 0;
                                    $expense = 0;
                                    $profit = 0;
                                    $items = 0;
                                ?>
                                <h6>All Purchased Product</h6>
                                <?php if($myItems->isEmpty()): ?>
                                    <a href="#" class="badge badge-dark badge-pill">No Purchase</a>
                                <?php else: ?>
                                    <?php $__currentLoopData = $myItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $revenue += $myProduct->totalprice;
                                            $expense += $myProduct->totalcost;
                                            $profit +=  $myProduct->totalprice - $myProduct->totalcost;
                                            $items += $myProduct->allQuantities;
                                        ?>
                                        <a href="/cloth/<?php echo e($myProduct->pid); ?>" class="badge badge-dark badge-pill"><?php echo e($myProduct->pname); ?> (<?php echo e($myProduct->allQuantities); ?>) </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> <?php echo e(count($myItems)); ?> Products</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> <?php echo e($items); ?> Items</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> Purchased</span>
                                <span class="badge badge-secondary"><i class="fa fa-eye"></i> Spends: <?php echo e($revenue); ?> Tk.</span>
                                <?php if(Session::has('admin')): ?>
                                 <span class="badge badge-info"><i class="fa fa-eye"></i> Profit Earned: <?php echo e($profit); ?> Tk.</span>
                                <?php endif; ?>
                                
                                <!-- Example Pie Chart Card-->
                                <div class="card mb-3 mt-2">
                                    <div class="card-header">
                                      <i class="fa fa-pie-chart"></i> Most Bought Product Pie Chart
                                    </div>
                                    <div class="card-body">
                                      <canvas id="myPieChart" width="100%" height="100"></canvas>
                                    </div>
                                    <div class="card-footer small text-muted">Updated           yesterday at 11:59 PM
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>
                                    <?php if($activities!=null): ?>
                                        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($activity->notify_to == $activity->notify_by): ?>  
                                            <tr>
                                                <td>
                                                    <a href="/cloth/<?php echo e($activity->notify_forid); ?>"><?php echo e($activity->notify_dtls); ?>

                                                    <span class="pull-right small text-muted"><?php echo e($activity->notify_date); ?> <?php echo e($activity->notify_time); ?> </span></a>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <?php if(Session::has('admin')): ?>
                    <div class="tab-pane" id="messages">
                        
                        <h6 class=" text-center text-muted">Admin & User Conversation</h6>
                            <div class="msg_history">
                                
                                <?php if($allMessages!=null): ?>
                                <?php $__currentLoopData = $allMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($message->msg_from != "Admin"): ?>
                                    <div class="incoming_msg mb-3">
                                        <div class="incoming_msg_img"> <img src="/custom_public/uploads/users/<?php echo e($user[0]->username); ?>/profilepic/<?php echo e($user[0]->username); ?>.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="sunil"> </div>
                                        <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p><?php echo e($message->message); ?></p>
                                            <span class="time_date text-white"> <?php echo e($message->send_time); ?>    |    <?php echo e($message->send_date); ?></span></div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($message->msg_from == 'Admin'): ?>
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                        <p><?php echo e($message->message); ?></p>
                                        <span class="time_date text-white"> <?php echo e($message->send_time); ?>   |    <?php echo e($message->send_date); ?></span> </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            </div>
                            <div class="type_msg">
                                <div class="input_msg_write">
                                    <input type="text" class="form-control write_msg" placeholder="Type a message" name="message" id="message" />
                                    <input type="hidden"
                                    id="sendto" name="sendto" value="<?php echo e($user[0]->username); ?>"/>
                                    <input type="hidden" id="csrf" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <button id="send-msg" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </div>
                            </div>
                          
                        
                    </div>
                    <?php else: ?>
                    <div class="tab-pane" id="messages">
                        
                        <h6 class=" text-center text-muted">User & Admin Conversation</h6>
                            <div class="msg_history">
                                <?php if($allMessages!=null): ?>
                                    <?php $__currentLoopData = $allMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($message->msg_from == Session::get('user')): ?>
                                        <div class="outgoing_msg">
                                        <div class="sent_msg">
                                        <p><?php echo e($message->message); ?></p>
                                            <span class="time_date"> <?php echo e($message->send_time); ?>    |    <?php echo e($message->send_date); ?></span> </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($message->msg_from == 'Admin'): ?>
                                        <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="/custom_public/images/clothing.png" onerror="this.src = '/custom_public/images/user.png'" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                            <p><?php echo e($message->message); ?></p>
                                            <span class="time_date"> <?php echo e($message->send_time); ?>   |    <?php echo e($message->send_date); ?></span></div>
                                        </div>
                                        </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="type_msg">
                              <div class="input_msg_write">
                                <input type="text" class="form-control write_msg" placeholder="Type a message" name="message" id="message" />
                                <input type="hidden"
                                id="sendto" name="sendto" value="Admin"/>
                                <input type="hidden" id="csrf" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button id="send-msg" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                              </div>
                            </div>
                          
                        
                    </div>
                    <?php endif; ?>
                    <div class="tab-pane" id="purchases">
                        <div class="row">
                            <?php $__currentLoopData = $allPurchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                              <div class="col-lg-12 col-sm-6 portfolio-item mb-3" id="<?php echo e($product->pid); ?>">
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
                                  <a href="/cloth/<?php echo e($product->pid); ?>"><img class="card-img-top" src="../custom_public/uploads/products/<?php echo e($product->pname); ?>/images/<?php echo e($product->pname); ?>0.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt=""></a>
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a href="/cloth/<?php echo e($product->pid); ?>"><?php echo e($product->pname); ?></a>
                                        </h4>
                                        <span>Purchase Date : <?php echo e($product->date); ?></span>
                                        <span class="pull-right">Quantity : <?php echo e($product->quantity); ?></span>
                                        Product Size : <?php echo e($product->size); ?>

                                        <p>Price per Item  : <?php echo e($product->price); ?> <?php echo e($product->currency); ?></p>
                                        <span>Total Price : <?php echo e($product->totalprice); ?> <?php echo e($product->currency); ?></span>
                                    </div>
                                    <div class="card-body">
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
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="favourites">
                        <div class="row">
                        <?php $__currentLoopData = $allFavourites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->available>0): ?>
                            
                            <div class="col-lg-12 col-sm-6 portfolio-item" id="<?php echo e($product->pid); ?>">
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
                                <a href="/cloth/<?php echo e($product->pid); ?>"><img class="card-img-top" src="../custom_public/uploads/products/<?php echo e($product->pname); ?>/images/<?php echo e($product->pname); ?>0.jpg" onerror="this.src = '../custom_public/images/products.jpg'" alt=""></a>
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
                    </div>
                    <div class="tab-pane" id="edit">
                        <form method="post" action="/user/update-info/<?php echo e($user[0]->id); ?>" enctype="multipart/form-data" id="register">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-12">
                                    <label for="username"><?php echo e($user[0]->accounttype); ?>name</label>
                                    <input class="form-control" id="username" type="text" aria-describedby="nameHelp" placeholder="Enter Username" name="username" value="<?php echo e($user[0]->username); ?>" readonly>
                                    <?php if($errors->has('userEXT')): ?>
                                    <small id="userEXT" class="text-danger"><?php echo e($errors->first('userEXT')); ?></small>
                                    <?php endif; ?>
                                    <small id="usernameHelp" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="firstname">First name</label>
                                    <input class="form-control" id="firstname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="firstname" value="<?php echo e($user[0]->firstname); ?>">
                                    <small id="firstnameHelp" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="lastname">Last name</label>
                                    <input class="form-control" id="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lastname" value="<?php echo e($user[0]->lastname); ?>">
                                    <small id="lastnameHelp" class="text-danger"></small>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <?php echo e($user[0]->accounttype); ?>

                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="DOB">Date of Birth</label>
                                    <input class="form-control" id="DOB" type="date" placeholder="Your Birth Date" name="DOB" value="<?php echo e($user[0]->dob); ?>">
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">Email address</label>
                                    <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo e($user[0]->email); ?>">
                                    <?php if($errors->has('emailEXT')): ?>
                                    <small id="emailEXT" class="text-danger"><?php echo e($errors->first('emailEXT')); ?></small>
                                    <?php endif; ?>
                                    <small id="emailHelp" class="text-danger"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="pnumber">Phone Number</label>
                                    <input class="form-control" id="pnumber" type="text" aria-describedby="phoneHelp" placeholder="Enter phone number" name="pnumber" value="<?php echo e($user[0]->phonenumber); ?>">
                                    <small id="pnumberHelp" class="text-danger"></small>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input class="form-control" id="password" type="password" placeholder="Password"  name="password" value="<?php echo e($user[0]->password); ?>">
                                    <small id="passwordHelp" class="text-danger"></small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cpassword">Confirm password</label>
                                    <input class="form-control" id="cpassword" type="password" placeholder="Confirm password" name="cpassword" value="<?php echo e($user[0]->password); ?>">
                                    <small id="cpasswordHelp" class="text-danger"></small>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country" name="country">
                                    <option value="<?php echo e($user[0]->country); ?>"><?php echo e($user[0]->country); ?></option>
                                    <option value="Other">Other</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="city">City</label>
                                    <select class="form-control" id="city" name="city">
                                    <option value="<?php echo e($user[0]->city); ?>"><?php echo e($user[0]->city); ?></option>
                                    <option value="Other">Other</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-md-6">
                                    <label for="area">Area</label>
                                    <select class="form-control" id="area" name="area">
                                    <option value="<?php echo e($user[0]->area); ?>"><?php echo e($user[0]->area); ?></option>
                                    <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="address">Address</label>
                                    <input class="form-control" id="address" type="text" placeholder="i.e: House# 7, Road No# 1, Block# B, Niketon" name="address" value="<?php echo e($user[0]->address); ?>">
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
                            <input type="hidden" name="acctype" value="<?php echo e($user[0]->accounttype); ?>"/>
                            <input class="btn btn-primary btn-block" type="submit" value="Update Info" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                
                <div class="card mb-2" style="width: 22rem;">
                    <img class="card-img-top" src="/custom_public/uploads/users/<?php echo e($user[0]->username); ?>/profilepic/<?php echo e($user[0]->username); ?>.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="Card image cap">
                    <div class="card-header text-muted">
                        <span class="text-capitalize"><?php echo e($user[0]->username); ?></span>
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo e($user[0]->firstname); ?> <?php echo e($user[0]->lastname); ?></p>
                      <p class="card-text"><?php echo e($user[0]->email); ?></p>
                      <p class="card-text"><?php echo e($user[0]->phonenumber); ?></p>
                    </div>
                    <?php if(Session::has('admin')): ?>
                    <?php else: ?>
                    <div class="card-footer">
                        <div class="input-group">
                            <form  action="/user/change-profilepic" method="post" enctype="multipart/form-data" id="update-form">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <input type="submit" class="input-group-text p-2" name="changepic" value="Change Photo">
                                    <div class="custom-file">
                                        <input class="form-control" id="profilepic" type="file" name="profilepic">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Clothing.com 2018</p>
        </div>
    <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('custom_public/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>

    "></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('custom_public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('custom_public/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom_public/addtocart.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('custom_public/register-validate.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('custom_public/send-msg.js')); ?>"></script>
    <script type="text/javascript">
        setTimeout(function() {
            $('.mzs-alert-div').fadeOut('slow'); //fast
        }, 5000);

        var pie = <?php echo json_encode($myItems, 15, 512) ?>;
        var pieProducts = [];
        var pieValues = [];

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
</body>
</html>