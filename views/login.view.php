<div class="login_box">

	<div class="box signIn">
		<div class="label"><h1>Login</h1></div>
		<?=Form::open()?>
			<div class="row">			
				<?=Form::label('signin_username', 'Username:')?>
				<?=Form::input('text', 'signin_username')?>
			</div>
			<div class="row">
				<?=Form::label('signin_password', 'Password:')?>
				<?=Form::input('password', 'signin_password')?>
				<br>
				<?=Login::display_error()?>
			</div>
			<div class="row">
				<?=Form::submit('Sign in')?>
			</div>
		<?=Form::close()?>		
	</div>

	<div class="box register">
		<div class="label"><h1>Register</h1></div>
		<?=Form::open()?>
			<div class="row">							
				<?=Form::label('register_username', 'Username:')?>
				<?=Form::input('text', 'register_username')?>
			</div>
			<div class="row">
				<?=Form::label('register_password', 'Password (min 5 characters): ')?>
				<?=Form::input('password', 'register_password')?>
			</div>

			<div class="row">
				<?=Form::label('register_confirm_password', 'Confirm Password: ')?>
				<?=Form::input('password', 'register_confirm_password')?>
				
			</div>
			
			<div class="row">
				<?=Form::submit('Register')?>	
			</div>
		<?=Form::close()?>
	</div>
</div>