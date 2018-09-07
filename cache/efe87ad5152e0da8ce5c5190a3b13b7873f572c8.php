<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Users page</h1>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="/public/users/<?php echo e($user['id']); ?>"><?php echo e($user['name']); ?></a>: <?php echo e($user['email']); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>