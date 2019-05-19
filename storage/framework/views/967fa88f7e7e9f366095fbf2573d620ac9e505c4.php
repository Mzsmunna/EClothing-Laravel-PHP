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
                <strong> Product Category :  <?php echo e($product->category); ?> <strong></br>
                
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