<!DOCTYPE html>
<html>
<head>
</head>
	<?php echo $__env->make('login.partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
  <div class="login-wrap">
  <?php echo $__env->yieldContent('content'); ?>
  </div>
</body>
</html>