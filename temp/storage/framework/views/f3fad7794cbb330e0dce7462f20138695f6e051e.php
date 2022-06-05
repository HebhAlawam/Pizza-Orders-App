 

<?php $__env->startSection('content'); ?>

<?php $i=0; $msg= ''; ?>

<div class="container">
	<h1 class="text-center">All Products</h1>	

<?php if($msg = Session::get('success')): ?>
<div class="alert alert-info">
	<?php echo e($msg); ?>

</div>
	
<?php endif; ?>

<div class="table-responsive">
	<table class="mainTable text-center table table-bordered">
	<thead>
		<tr>
			<td>#ID</td>
			<td>Name</td>
			<td>Price</td>
			<td>Action</td>
		</tr>
	</thead>	
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td scope="row"><?php echo e(++ $i); ?></td>
			<td><?php echo e($product -> name); ?></td>
			<td><?php echo e($product -> price); ?></td>
			<td>
				<a class="btn btn-primary" href="<?php echo e(route('product.edit',$product->id)); ?>">Edit</a>
				<a class="btn btn-success" href="<?php echo e(route('product.show',$product->id)); ?>">Show</a>
			<!--	<form action="<?php echo e(route('product.destroy',$product->id)); ?>" method="POST"> 
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger"> Delete </button>
				</form>
			-->
				<a href="<?php echo e(route('soft.delete',$product->id)); ?>" class="btn btn-warning">SoftDelete</a>
			

			</td>
			
		</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

		
	</tbody>
</div>
	</table>
	<?php echo e($products->links()); ?>							
								
		<a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary"> New product</a>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/product/index.blade.php ENDPATH**/ ?>