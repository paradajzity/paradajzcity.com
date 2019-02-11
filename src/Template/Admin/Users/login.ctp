<div class="text-center">
	<h1 class="h4 text-gray-900 mb-4"><?= __('Welcome Back!') ?></h1>
</div>
<?= $this->Form->create('',['class' => 'user']) ?>
	<div class="form-group">
		<?= $this->Form->username(__('username'), [
			'class' => 'form-control form-control-user',
			'placeholder' => __('Enter Username or Email Address...')
		]); ?>
	</div>
	<div class="form-group">
		<?= $this->Form->password('password', [
		'class' => 'form-control form-control-user',
		'placeholder' => __('Password')
	]); ?>
	</div>
	<?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-user btn-block']) ?>
<?= $this->Form->end() ?>
<hr>
<div class="text-center">
	<a class="small" href="#"><?= __('Forgot Password?') ?></a>
</div>