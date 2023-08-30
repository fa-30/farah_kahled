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
            order
        </legend>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>price</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td><?php echo e($order->id); ?></td>
                <td><?php echo e($order->price); ?></td>
                </tr>

            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>
           User
        </legend>
        <table>
            <thead>
                <tr>
                    <th>
                        user Name
                    </th>
                    <th>
                        user email
                    </th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td><?php echo e($order->user->name); ?></td>
                        <td><?php echo e($order->user->email); ?></td>
                    </tr>
             
            </tbody>
        </table>
    </fieldset>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/order/show.blade.php ENDPATH**/ ?>