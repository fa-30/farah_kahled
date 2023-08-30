<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('product.edit',$product->id)); ?>" method="post"  enctype="multipart/form-data" >
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
     <input type="text" name="product_name" value="<?php echo e($product->name); ?>">
     <input type="text" name="product_price" value="<?php echo e($product->price); ?>">
     <input type="text" name="product_availability" value="<?php echo e($product->availability); ?>">
     <input type="number" name="category_id" value="<?php echo e($product->category_id); ?>">
     <input type="file" name="photo" >

     <input type="submit" >


    </form>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/product/update.blade.php ENDPATH**/ ?>