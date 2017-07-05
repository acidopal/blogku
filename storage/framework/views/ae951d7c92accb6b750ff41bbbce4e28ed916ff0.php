<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('blog.partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
</head>
<body>
  <div id="wrapper">
  <?php echo $__env->make('blog.partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  </div>
  <?php echo $__env->make('blog.partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
