<?php $__env->startSection('content'); ?>
<br><br><br><br><br>
  
  <br>
  
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<h2 style="margin-top: 12px;" class="text-center">Edit Product</a></h2>
<br>
 
<form action="<?php echo e(route('products.update', $product_info->id)); ?>" method="POST" name="update_product">
<?php echo e(csrf_field()); ?>

<?php echo method_field('PATCH'); ?>
 
<div class="row">
<div class="col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <input type="text" name="id" class="form-control" placeholder="Enter ID" value="<?php echo e($product_info->id); ?>">
            <span class="text-danger"><?php echo e($errors->first('id')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo e($product_info->title); ?>">
            <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Product Code</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" value="<?php echo e($product_info->product_code); ?>">
            <span class="text-danger"><?php echo e($errors->first('product_code')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description" ><?php echo e($product_info->description); ?></textarea>
            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Company</strong>
            <input type="text" name="company" class="form-control" placeholder="Enter Company" value="<?php echo e($product_info->company); ?>">
            <span class="text-danger"><?php echo e($errors->first('company')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Type</strong>
            <input type="text" name="type" class="form-control" placeholder="Enter Type" value="<?php echo e($product_info->type); ?>">
            <span class="text-danger"><?php echo e($errors->first('type')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <input type="number" name="price" class="form-control" placeholder="Enter price" value="<?php echo e($product_info->price); ?>">
            <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\resources\views/product/edit.blade.php ENDPATH**/ ?>