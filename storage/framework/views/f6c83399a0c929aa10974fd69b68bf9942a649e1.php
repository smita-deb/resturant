

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success">
                 <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
<!--             <form action="<?php echo e(route('food.store')); ?>" method="post"><?php echo csrf_field(); ?>
 -->            <div class="card">
                <div class="card-header">All Food
                  <span class="float-right">
                    <a href="<?php echo e(route('food.create')); ?>">
                    <button class="btn btn-outline-secondary">Add Food</button>
                  </a>
                  </span></div>

                <table class="table">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Category</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php if(count($foods)>0): ?>
                 <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><img src="<?php echo e(asset('images')); ?>/<?php echo e($food->image); ?>" width="100"></td>       
                    <td><?php echo e($food->name); ?></td>
                    <td><?php echo e($food->description); ?></td>
                    <td>$<?php echo e($food->price); ?></td>
                    <td><?php echo e($food->category->name); ?></td>

                    <td><a href="<?php echo e(route('food.edit',[$food->id])); ?>" class="btn btn-outline-success">Edit</a></td>
                    <td>
                      <form action="<?php echo e(route('food.destroy',[$food->id])); ?>" method="post"><?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <button class="btn btn-outline-danger">Delete</button>
                      </form>
                    </td>
                    
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <td>No Food to display</td>
                <?php endif; ?>
                </tbody>
                </table>
                <?php echo e($foods->links()); ?>

            </div>
<!--             </form>
 -->        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\resources\views/food/index.blade.php ENDPATH**/ ?>