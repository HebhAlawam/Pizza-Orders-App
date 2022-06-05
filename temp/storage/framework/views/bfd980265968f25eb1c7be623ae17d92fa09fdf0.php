



<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">Show User
                <a style="float: right;" class="btn btn-primary" href="<?php echo e(route('users.index')); ?>"> Back</a>
            </div>
        
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <?php echo e($user->name); ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <?php echo e($user->email); ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        <?php if(!empty($user->getRoleNames())): ?>
                            <?php echo e($user->getRoleNames()); ?>

                        <!--    <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="badge badge-success"><?php echo e($v); ?></label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        -->
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>    
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/users/show.blade.php ENDPATH**/ ?>