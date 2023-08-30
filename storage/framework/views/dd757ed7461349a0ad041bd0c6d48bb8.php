<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <a href="<?php echo e(route('product.create')); ?>">Add Product</a>
   <a href="<?php echo e(route('category.index')); ?>">Categories</a>
   <a href="<?php echo e(route('order.index')); ?>">order</a>
    <table border =1>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product price</th>
              
                <th>photo</th>
                <th>Actions</th>


            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
             
                <td><img src="<?php echo e(asset('images/'.$product->photo)); ?>" alt="Product Photo" style="height: 50px;"></td>
                <td>
                    
                 <form action="<?php echo e(route('product.show',$product->id)); ?>" method="get">
                    <button>Show</button>
                 </form>
                   <form action="<?php echo e(route('product.destroy',$product->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Delete</button>
                   </form>

                   <form action="<?php echo e(route('product.update',$product->id)); ?>" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/product/index.blade.php ENDPATH**/ ?>