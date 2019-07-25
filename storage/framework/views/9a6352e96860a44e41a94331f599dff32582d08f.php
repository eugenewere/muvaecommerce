<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|PT+Sans+Narrow" rel="stylesheet">

    <!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">   
    
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="../public/css/maincss.css">
   
   
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>

    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="../public/js/app.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
   
    
   
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\muvaecommerce\resources\views/layouts/master.blade.php ENDPATH**/ ?>