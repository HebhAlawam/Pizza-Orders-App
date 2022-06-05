

<?php $__env->startSection('content'); ?>

<h1 class="text-center">Add new Products <?php echo e($product->id); ?></h1> 

<div class="container">
  <form class="form-horizontal" action="<?php echo e(route('product.update',$product->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <!-- strat name --> 
    <div class="  form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <label for="exampleInputEmail1">Product name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter the product's name" value="<?php echo e($product->name); ?>">
      </div>
    </div>
  <!-- end name --> 

  <!-- strat Price --> 
    <div class="  form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <label for="">Product price</label>
        <input type="text" name="price" class="form-control" placeholder="Enter the product's Price" value="<?php echo e($product->price); ?>">
      </div>
    </div>
  <!-- end 	info --> 

  <!-- strat Price --> 
    <div class="  form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <label for="">info</label>
        <input type="text" name="info" class="form-control" placeholder="Enter the product's Price">
      </div>
    </div>
  <!-- end 	info --> 

  <!-- strat submit -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  <!-- end submit -->
  </form>
</div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/product/edit.blade.php ENDPATH**/ ?>