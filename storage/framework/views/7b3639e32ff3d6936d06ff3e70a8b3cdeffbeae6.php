

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success">
                 <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
<!--             <form action="<?php echo e(route('category.store')); ?>" method="post"><?php echo csrf_field(); ?>
 -->            <div class="card">
                <div class="card-header">All Category
                 <span class="float-right">
                    <a href="<?php echo e(route('category.create')); ?>">
                    <button class="btn btn-outline-secondary">Add Category</button>
                  </a>
                  </span></div>

                <table class="table">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php if(count($categories)>0): ?>
                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($key+1); ?></th>
                    <td><?php echo e($category->name); ?></td>
                    <td><a href="<?php echo e(route('category.edit',[$category->id])); ?>" class="btn btn-outline-success">Edit</a></td>
                    <td>
                      <form action="<?php echo e(route('category.destroy',[$category->id])); ?>" method="post"><?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <button class="btn btn-outline-danger">Delete</button>
                      </form>
                    </td>
                    
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <td>No Categories to display</td>
                <?php endif; ?>
                </tbody>
                </table>
            </div>
<!--             </form>
 -->        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\resources\views/category/index.blade.php ENDPATH**/ ?>