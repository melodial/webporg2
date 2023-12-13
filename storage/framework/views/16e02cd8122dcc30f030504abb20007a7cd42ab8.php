<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <h1>
               <?php echo e(__('registration.judul')); ?>

            </h1>
        </div>
    </div>

    <div class="form-group">
        <div>
            <label for="nama"><?php echo e(__('registration.input.name')); ?></label><br>
            <input type="text" id="name" placeholder="name">
        </div>
        <div>
            <label for="nim"><?php echo e(__('registration.input.nim')); ?></label><br>
            <input type="text" id="nim" placeholder="NIM">
        </div>
        <div>
            <label for="age"><?php echo e(__('registration.input.age')); ?></label><br>
            <input type="text" id="age" placeholder="10">
        </div>
        <br>
        <div class="contact-form-button">
            <button id="submitbtn" type="submit"><?php echo e(__('registration.submit')); ?></button>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\maprojek\resources\views/registrasi.blade.php ENDPATH**/ ?>