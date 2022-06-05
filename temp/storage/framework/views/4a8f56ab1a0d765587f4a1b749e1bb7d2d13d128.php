

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

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
                <div class="card-header">All Pizza</div>

                <div class="card-body">
                	<?php if($msg = Session::get('success')): ?>
						<div class="alert alert-info">
							<?php echo e($msg); ?>

						</div>	
					<?php endif; ?>

                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">S.price</th>
                                <th scope="col">M.price</th>
                                <th scope="col">L.price</th>
                                <th scope="col"></th>
                                <th scope="col"></th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($pizzas) > 0): ?>
                                <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($key + 1); ?></th>
                                        <td><img src="<?php echo e(Storage::url($pizza->image)); ?>" width="80"></td>
                                        <td><?php echo e($pizza->name); ?></td>
                                        <td ><?php echo e(Str::limit($pizza->description, 80)); ?></td>
                                        <td><?php echo e($pizza->category); ?></td>
                                        <td><?php echo e($pizza->small_pizza_price); ?></td>
                                        <td><?php echo e($pizza->medium_pizza_price); ?></td>
                                        <td><?php echo e($pizza->big_pizza_price); ?></td>
                                        <td>
                                        	<a href="<?php echo e(route('pizzaapp.edit',$pizza->id)); ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('pizzaapp.destroy',$pizza->id)); ?>" method="POST"> 
    											<?php echo csrf_field(); ?>
    											<?php echo method_field('DELETE'); ?>
    											<button type="submit" class="btn btn-danger"> Delete </button>
    										</form>
									    </td>
                                    </tr>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <p>No pizza to show</p>
                            <?php endif; ?>

                        </tbody>
                    </table>
                    <div class=""> <?php echo e($pizzas->links()); ?> </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/pizza/index.blade.php ENDPATH**/ ?>