

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Orders
                    <a style="float:right;" href="<?php echo e(route('pizzaapp.index')); ?>"><button class="bnt btn-secondary btn-sm" style="margin-left: 5px;">View Pizza</button></a>
                </div>

                <div class="card-body">
                	<table class="table table-bordered table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">Phone/Email</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">S. pizza</th>
                                <th scope="col">M. pizza</th>
                                <th scope="col">L. pizza</th>
                                <th scope="col">Total($)</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-status')): ?>
                                    <th scope="col">Accepted</th>
                                    <th scope="col">Rejected</th>
                                    <th scope="col">Completed</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<tr>
                            	<td><?php echo e($order->user->name); ?></td>
                            	<td><?php echo e($order->user->email); ?><br><?php echo e($order->phone); ?></td>
                            	<td><?php echo e($order->date); ?>/<?php echo e($order->time); ?></td>
                            	<td><?php echo e($order->pizza->name); ?></td>
                            	<td><?php echo e($order->samll_pizza); ?></td>
                            	<td><?php echo e($order->meduim_pizza); ?></td>
                            	<td><?php echo e($order->big_pizza); ?></td>
                            	<td><?php echo e($order->samll_pizza * $order->pizza->small_pizza_price +
                            		   $order->meduim_pizza * $order->pizza->medium_pizza_price +
                            		   $order->big_pizza * $order->pizza->big_pizza_price); ?></td>
                            	<td><?php echo e($order->body); ?></td>
                            	<td><?php echo e($order->status); ?></td>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders-status')): ?>
                                	<form method="GET" action="<?php echo e(route('order.status',$order->id)); ?>">
                                    	<td>
                                    		<input type="submit" name="status" value="accepted" class="btn btn-primary btn-sm">
                                    	</td>
                                    	<td>
                                    		<input type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">
                                    	</td>
                                    	<td>
                                    		<input type="submit" name="status" value="completed" class="btn btn-success btn-sm">
                                    	</td>
                                	</form>
                                <?php endif; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/order/index.blade.php ENDPATH**/ ?>