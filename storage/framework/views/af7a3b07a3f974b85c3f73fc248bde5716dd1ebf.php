<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoviGuard</title>
    <?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<?php echo $__env->make('user.usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('layouts.all-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/layouts/application.blade.php ENDPATH**/ ?>