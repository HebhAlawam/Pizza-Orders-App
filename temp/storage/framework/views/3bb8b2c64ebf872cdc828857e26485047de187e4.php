 

<?php $__env->startSection('content'); ?>

<?php $i=0; $msg= ''; ?>

<div class="container">
	<h1 class="text-center">Trashed Products</h1>	

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
				<a class="btn btn-primary" href="<?php echo e(route('back',$product->id)); ?>">Back</a>
				<a class="btn btn-danger" href="<?php echo e(route('hardDelete',$product->id)); ?>">Delelte</a>
				

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





<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/product/trash.blade.php ENDPATH**/ ?>