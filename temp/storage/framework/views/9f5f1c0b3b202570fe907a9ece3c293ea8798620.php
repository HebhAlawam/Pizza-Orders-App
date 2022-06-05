

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                    	<form action="<?php echo e(route('orders.index')); ?>" method="GET">
                    		<a href="<?php echo e(route('orders.index')); ?>"  class="list-group-item list-group-item-action">Show all</a>
	                    	<input type="submit" name="category" value="Vegetarian" class="list-group-item list-group-item-action" >
	                    	<input type="submit" name="category" value="Nonvegetarian" class="list-group-item list-group-item-action" >
	                    	<input type="submit" name="category" value="Traditional" class="list-group-item list-group-item-action" >
	                    </form>	
                    </ul>
                </div>
            </div>
        </div>

         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza [<?php echo e(count($pizzas)); ?> Types]</div>

                <div class="card-body">
                	<div class="row">
                	    <?php $__empty_1 = true; $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                	<div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
	                		<img src="<?php echo e(Storage::url($pizza->image)); ?>" class="img-thumbnail" style="width: 100%;">
	                		<p><?php echo e($pizza->name); ?></p>

	                    	<p><?php echo e(Str::limit($pizza->description, 80)); ?></p>	
	                    	<a href="<?php echo e(route('orders.show',$pizza->id)); ?>" class="btn btn-danger mb-1">Order Now</a> 
	                	</div>
	                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	                		<p>No pizzas to show</p>
	                	<?php endif; ?>
                 	</div>
                </div>

            </div>
        </div>
    </div>
</div>

<style type="">
	a.list-group-item{
		font-size: 18px;
	}
	a.list-group-item:hover{
		background-color: red;
		color: white;
	}
	.card-header{
		background-color: red;
		color: white;
		font-size: 20px;
	}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/order/frontpage.blade.php ENDPATH**/ ?>