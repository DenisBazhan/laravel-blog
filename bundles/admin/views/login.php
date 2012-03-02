<h1>Admin Login</h1>

<p>
	Please login to the admin area with your username and password.
</p>

<?php echo Form::open('admin/login', 'POST'); ?>

	<?php echo Form::label('username', 'Username'); ?>
	<?php echo Form::text('username', Input::old('username')); ?>


	<?php echo Form::label('password', 'Password'); ?>
	<?php echo Form::password('password'); ?>

	<?php echo Form::submit('Login'); ?>

<?php echo Form::close(); ?>