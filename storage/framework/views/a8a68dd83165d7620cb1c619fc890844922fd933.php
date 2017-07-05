<?php $__env->startSection('content'); ?>
				<!-- Main -->
					<div id="main">

						<!-- Post -->
						
						<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="/read/<?php echo e($showArticle->id); ?>"><?php echo e($showArticle->judul); ?></a></h2>
										<p><?php echo e($showArticle->isi); ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?php echo e($showArticle->tanggal); ?></time>
										<a href="#" class="author"><span class="name"><?php echo e($showArticle->author_id); ?></span><img src="assets/blog/images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="<?php echo e(url('img/article/')); ?>/<?php echo e($showArticle->foto); ?>" alt="" /></a>
								<p><?php echo e($showArticle->isi); ?></p>
								<footer>
									<ul class="actions">
										<li><a href="/read/<?php echo e($showArticle->id); ?>" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
						 <!-- Pagination -->
						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<ul class="actions pagination">
								<?php echo e($article->links()); ?>

							</ul>

					</div>
					
  <?php echo $__env->make('blog.partials._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
				


		
<?php echo $__env->make('blog.partials.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>