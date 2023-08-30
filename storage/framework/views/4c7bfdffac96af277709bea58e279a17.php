<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Category
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo e($category->name); ?></td>
                </tr>

            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>
            Category Products
        </legend>
        <table>
            <thead>
                <tr>
                    <th>
                        Product Name
                    </th>
                    <th>
                        Product Price
                    </th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/category/show.blade.php ENDPATH**/ ?>