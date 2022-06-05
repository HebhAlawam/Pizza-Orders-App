



<?php $__env->startSection('content'); ?>
<div class="container ">
	<div class="row">
		<div class="col-md-2">
	            <div class="card">
	                <div class="card-header">Menu</div>
	                <div class="card-body">
	                	<ul class="list-group">
	                		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pizza-list')): ?>
	                          <a href="<?php echo e(route('pizzaapp.index')); ?>" class="list-group-item list-group-item-action">View</a>
	                        <?php endif; ?>

	                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pizza-create')): ?>
	                		  <a href="<?php echo e(route('pizzaapp.create')); ?>" class="list-group-item list-group-item-action">Create</a>
	                        <?php endif; ?>

	                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-list')): ?>
	                		  <a href="<?php echo e(route('order.index')); ?>" class="list-group-item list-group-item-action">User orders</a>
	                        <?php endif; ?>

	                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customer-list')): ?>
	                          <a href="<?php echo e(route('customer')); ?>" class="list-group-item list-group-item-action">customers</a>
	                        <?php endif; ?>

	                	</ul>
	                </div>
	            </div>
	        </div>

	    <div class="col-md-10">
		    <div class="card">
		        <div class="card-header">Users Management</div>
		        
		        <div class="card-body">
					<?php if($message = Session::get('success')): ?>
					<div class="alert alert-success">
					  <p><?php echo e($message); ?></p>
					</div>
					<?php endif; ?>


					<table class="table table-bordered">
					 <tr>
					   <th>#</th>
					   <th>Name</th>
					   <th>Email</th>
					   <th>Roles</th>
					   <th width="280px">Action</th>
					 </tr>
					 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  <tr>
					    <td><?php echo e(++$key); ?></td>
					    <td><?php echo e($user->name); ?></td>
					    <td><?php echo e($user->email); ?></td>
					    <td>
					     <?php echo e($user->role); ?>

					    </td>
					    <td>
					    	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-list')): ?>
					      		<a class="btn btn-info" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>
					      	<?php endif; ?>
					      	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-edit')): ?>
					       		<a class="btn btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>
					       	<?php endif; ?>
					       	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-delete')): ?>
					        	<a class="btn btn-success" href="<?php echo e(route('users.destroy',$user->id)); ?>"> Delete</a>
					        <?php endif; ?>
					    </td>
					  </tr>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-delete')): ?>
						<div class="pull-right">
				            <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Create New User</a>
				        </div>
				    <?php endif; ?>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/users/index.blade.php ENDPATH**/ ?>