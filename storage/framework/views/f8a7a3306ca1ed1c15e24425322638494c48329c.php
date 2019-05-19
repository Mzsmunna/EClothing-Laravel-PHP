
  <?php if($allMessages!=null): ?>
    <?php $__currentLoopData = $allMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($message->msg_from != "Admin"): ?>
        <div class="incoming_msg mb-3">
          <div class="incoming_msg_img"> <img src="/custom_public/uploads/users/<?php echo e($message->msg_from); ?>/profilepic/<?php echo e($message->msg_from); ?>.jpg" onerror="this.src = '/custom_public/images/user.png'" alt="sunil"> </div>
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
