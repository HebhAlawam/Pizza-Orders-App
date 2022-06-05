

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    	
        <div class="col-md-8">
        	<?php if(count($errors) > 0): ?>
	            <div class="card mt-3">
	                <div class="card-body">
	                    <div class="alert alert-danger">
	                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                           <p> <?php echo e($error); ?><p>
	                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    </div>
	                </div>
	            </div>
	        <?php endif; ?>
            <div class="card">
            	<div class="card-header">Edit <?php echo e($pizza->name); ?> Pizza</div>
            	<div class="card-body">
	                <form method="POST" action="<?php echo e(route('pizzaapp.update',$pizza->id)); ?>" enctype="multipart/form-data"> 
	                	<?php echo method_field('PUT'); ?> 
	                    <?php echo csrf_field(); ?>

	                    <div class="form-group">
   							 <label for="name" class="col-md-4 col-form-label text-md-right">Name of pizza</label>
	                        <input type="text" class="form-control" name="name" placeholder="name of pizza" value="<?php echo e($pizza->name); ?>"> 
  						</div>

  						<div class="form-group">
   							 <label for="description" class="col-md-4 col-form-label text-md-right">Description of pizza</label>
	                        <textarea class="form-control" name="description"><?php echo e($pizza->description); ?></textarea>
  						</div>

	                    <div class="form-group">
	                    	<label class="col-md-4 col-form-label text-md-right">Pizza price($)</label>
	                    	<div class="row">
								<div class="col">
	                    			<input type="number" class="form-control" placeholder="small pizza price" name="small_pizza_price" value="<?php echo e($pizza->small_pizza_price); ?>">
	                    		</div>
	                    		<div class="col">
	                    			<input type="number" class="form-control" placeholder="medium pizza price" name="medium_pizza_price" value="<?php echo e($pizza->medium_pizza_price); ?>">
	                    		</div>
	                    		<div class="col">
	                    			<input type="number" class="form-control" placeholder="big pizza price" name="big_pizza_price" value="<?php echo e($pizza->big_pizza_price); ?>">
								</div>
	                    	</div>
	                    </div>

	                   <div class="form-group">
		                   	<label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
		                   	<select class="form-control" name="category" >
		                   		<option value=""></option>
		                   		<option value="vegetarian">Vegetarian pizza</option>
		                   		<option value="nonvegetarian">Non Vegetarian pizza</option>
		                   		<option value="traditional">Traditional pizza</option>
		                   	</select>
	                   </div> 

	                   <div class="form-group">
	                   		<label class="col-md-4 col-form-label text-md-right">Image</label>
	                   		<input type="file" class="form-control" name="image" >
	                   		<img src="<?php echo e(Storage::url($pizza->image)); ?>" width="80">
	                   </div>


	                    <div class="form-group text-center mt-3">
	                            <button type="submit" class="btn btn-primary text-center"> Save </button>
	                    </div>

	                </form>
	            </div>                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/pizza/edit.blade.php ENDPATH**/ ?>