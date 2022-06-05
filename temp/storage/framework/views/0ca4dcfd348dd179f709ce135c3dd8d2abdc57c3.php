

<?php $__env->startSection('content'); ?>

<h1 class="text-center"><?php echo e($product->name); ?> Products </h1> 

<div class="container">
  
  <!-- strat name --> 
    <div class="  form-group">
    	 <label for="exampleInputEmail1">Product name</label>
    	<p><?php echo e($product->name); ?></p>
    </div>
  <!-- end name --> 

  <!-- strat Price --> 
    <div class="  form-group">
    	<label for="">Product price</label>
    	<p><?php echo e($product->price); ?></p>
    </div>
  <!-- end 	price --> 

  <!-- strat info --> 
    <div class="  form-group">
		<label for="">info</label>
    	<p><?php echo e($product->info); ?></p>
    </div>
  <!-- end 	info --> 


</div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/product/show.blade.php ENDPATH**/ ?>