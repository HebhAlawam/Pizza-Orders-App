

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    	 <div class="col-md-14">

            <div class="card">
                <div class="card-header">Order 
                	<a href="<?php echo e(route('pizzaapp.index')); ?>">pizza</a></div>

                <div class="card-body">
                	<table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Member Since</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<tr>
                            	<td><?php echo e($user->name); ?></td>
                            	<td><?php echo e($user->email); ?></td>
                            	<td><?php echo e($user->created_at); ?></td>
                            	
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>    

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/pizza/costumor.blade.php ENDPATH**/ ?>