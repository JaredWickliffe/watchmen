<div class="login_box">

	<div class="box signIn">
		<div class="label"><h1>Login</h1></div>
		<div class="row">
			<?=Form::label('username', 'Username:')?>
			<?=Form::input('text', 'username')?>
		
			<?=Form::label('password', 'Password:')?>
			<?=Form::input('text', 'password')?>
		</div>
		<div class="row">
			<?=Form::submit()?>
		</div>
	</div>

	<div class="box register">
		<div class="label"><h1>Register</h1></div>
		<div class="row">
			<?=Form::label('username', 'Username:')?>
			<?=Form::input('text', 'username')?>
		</div>
		<div class="row">
			<?=Form::label('password', 'Password:')?>
			<?=Form::input('text', 'password')?>
		</div>
		<div class="row">
			<?=Form::submit()?>
		</div>
	</div>
</div>