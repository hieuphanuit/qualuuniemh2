<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container">
		<div class="flex-center position-ref full-height">
			<?php if(Route::has('login')): ?>
				<div class="top-right links">
					<?php if(auth()->guard()->check()): ?>
						<a href="<?php echo e(url('/home')); ?>">Home</a>
					<?php else: ?>
						<a href="<?php echo e(route('login')); ?>">Login</a>
						<a href="<?php echo e(route('register')); ?>">Register</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="content">
				<div class="title m-b-md">
					Laravel
				</div>

				<div class="links">
					<a href="https://laravel.com/docs">Documentation</a>
					<a href="https://laracasts.com">Laracasts</a>
					<a href="https://laravel-news.com">News</a>
					<a href="https://nova.laravel.com">Nova</a>
					<a href="https://forge.laravel.com">Forge</a>
					<a href="https://github.com/laravel/laravel">GitHub</a>
				</div>
			</div>
		</div>
		
		<button class="btn btn-primary">test boostrap</button>
	</div>
	
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
