<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border =1>
        <thead>
            <tr>
                
                <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>category</th>
                <th>photo</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->availability); ?></td>
                <td><?php echo e($product->category_id); ?></td>
                <td> <img src="/images/<?php echo e($product->photo); ?>" alt=""></td>
                <td><a href="<?php echo e(route('product.index')); ?>">back</a></td>
            </tr>

        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/product/show.blade.php ENDPATH**/ ?>