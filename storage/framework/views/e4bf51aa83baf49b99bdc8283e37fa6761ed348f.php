   
<?php $__env->startSection('content'); ?>
<br><br><br><br><br>
  
  <br>
  
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<br><br><a href="<?php echo e(route('products.create')); ?>" class="btn btn-warning mb-2">Add</a> 
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr style="color:white;">
                 <th>ID</th>
                 <th>Title</th>
                 <th>Product Code</th>
                 <th>Description</th>
                 <th>Company</th>
                 <th>Type</th>
                 <th>Price</th>
                 <th>Created at</th>
                 
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr style="color:white;">
                 <td><?php echo e($product->id); ?></td>
                 <td><?php echo e($product->title); ?></td>
                 <td><?php echo e($product->product_code); ?></td>
                 <td><?php echo e($product->description); ?></td>
                 <td><?php echo e($product->company); ?></td>
                 <td><?php echo e($product->type); ?></td>
                 <td><?php echo e($product->price); ?></td>
                 <td><?php echo e(date('Y-m-d', strtotime($product->created_at))); ?></td>
                 <td><a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
          </table>
          <?php echo $products->links(); ?>

       </div> 
   </div>
   </div>
   <br><br>
 <?php $__env->stopSection(); ?>  
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\resources\views/product/list.blade.php ENDPATH**/ ?>