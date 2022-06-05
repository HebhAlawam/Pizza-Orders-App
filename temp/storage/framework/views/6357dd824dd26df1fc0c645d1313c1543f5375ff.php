<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-10">

            <div class="card">
                <div class="card-header">Your orders</div>

                <div class="card-body">
                    <table class="table table-bordered text-center">
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
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>    
                <a href="<?php echo e(route('frontpage')); ?>" class="btn btn-danger text-center">New order</a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\webBack\xamppro\htdocs\supermarket\resources\views/home.blade.php ENDPATH**/ ?>