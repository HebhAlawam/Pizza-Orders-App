

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">	
                <?php if(Auth::check()): ?>

            		<?php if(session('successmsg')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('successmsg')); ?>

                    </div>
               		<?php endif; ?>
               		<?php if(session('errormsg')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(session('errormsg')); ?>

                    </div>
               		<?php endif; ?>
        			<form action="<?php echo e(route('orders.store')); ?>" method="POST"><?php echo csrf_field(); ?>
        				<div class="form-group">
        					<p>Name: <?php echo e(auth()->user()->name); ?></p>
        					<p>Email: <?php echo e(auth()->user()->email); ?></p>
        					<p>Phone number: <input type="number" name="phone" class="form-control"></p>
        					<p>Small pizza order: <input type="number" name="samll_pizza" class="form-control" value="0"></p>
        					<p>Meduim pizza order: <input type="number" name="meduim_pizza" class="form-control" value="0"></p>
        					<p>Big pizza order: <input type="number" name="big_pizza" class="form-control" value="0"></p>
        					<p> <input type="hidden" name="pizza_id" value="<?php echo e($pizza->id); ?>" class="form-control"></p>
        					<p> <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>" class="form-control"></p>
        					<p><input type="date" name="date" class="form-control" ></p>
        					<p><input type="time" name="time" class="form-control" ></p>
        					<p> <textarea name="body" class="form-control" ></textarea> </p>
        					<p class="text-center">
        						<button class="btn btn-danger" type="submit">Make Order</button>
        					</p>
        				</div>        				
        			</form>	
                <?php else: ?>
                    <p class="text-center"><a href="<?php echo e(route('login')); ?>">Please login to make orders</a></p>
                <?php endif; ?>
                </div>	     	    
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">                	    
            		<img src="<?php echo e(Storage::url($pizza->image)); ?>" class="img-thumbnail" style="width: 100%;">
            		<h2><?php echo e($pizza->name); ?></h2>
                    <h5><?php echo e($pizza->category); ?></h5>
                	<p><?php echo e($pizza->description); ?></p>
                	<p class="lead">Small pizza price:$ <?php echo e($pizza->small_pizza_price); ?></p>	
                	<p class="lead">Meduim pizza price:$ <?php echo e($pizza->medium_pizza_price); ?></p>	
                	<p class="lead">Big pizza price:$ <?php echo e($pizza->big_pizza_price); ?></p>	

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/order/show.blade.php ENDPATH**/ ?>