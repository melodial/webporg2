<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>collection</title>
    <style>
        .hewan{
            border-collapse: collapse;
            width: 100%;
        }
        .hewan td, .binatang th{
            border:1px solid #ddd;
            padding: 8px;
        }
        .hewan tr:nth-child(even){
            background-color: cadetblue;
        }
        .hewan tr:hover{
            background-color: bisque;
        }
        .binatang{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: beige;
            color: black;
        }
    </style>
</head>
<body>
    <table class="hewan">
        <thead class="binatang">
            <tr>
                <th>nama binatang</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $hewan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binatang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($binatang); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\maprojek\resources\views/collection.blade.php ENDPATH**/ ?>