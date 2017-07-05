<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('dashboard.partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>

<div class="wrapper">
	<?php echo $__env->make('dashboard.partials._navside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('dashboard.partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('dashboard.partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>
</html>