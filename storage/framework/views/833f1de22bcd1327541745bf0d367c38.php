<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('product.store')); ?>" method="post"  enctype="multipart/form-data" >
      <?php echo csrf_field(); ?>
      <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" value="<?php echo e(old('product_name')); ?>" ><br>

    <label for="product_price">Product Price</label>
    <input type="number" name="product_price" id="product_price" value="<?php echo e(old('product_price')); ?>" ><br>

    <label for="product_availability">product availability</label>
    <select name="product_availability" id="product_availability" >
        <option ></option>
        <option value="available" <?php echo e(old('product_availability') == 'available' ? 'selected' : ''); ?>>Available</option>
        <option value="unavailable" <?php echo e(old('product_availability') == 'unavailable' ? 'selected' : ''); ?>>Unavailable</option>
    </select><br>

    <label for="category_id">Category ID</label>
    <input type="number" name="category_id" id="category_id" value="<?php echo e(old('category_id')); ?>" ><br>
     <input type="file" name="photo" ><br>

     <input type="submit" >
     <?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    </form>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/product/create.blade.php ENDPATH**/ ?>