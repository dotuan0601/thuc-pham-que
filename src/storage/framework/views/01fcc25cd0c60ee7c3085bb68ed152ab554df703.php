<html>
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div>
    <?php echo $__env->make('includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>
</html>