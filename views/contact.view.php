<div class="contact">
	<div class="label"><h1>Contact Us</h1></div>
	<div class="row">
		<p>Don't hesitate to ask us any questions you have. We are always to happy to help.</p>
	</div>

	<div class="row">
		<?=Form::label('email', '<strong>*Your Email Address:</strong>')?>
		<?=Form::input('text', 'email')?>
	</div>

	<div class="row">
		<?=Form::label('message', '<strong>*Your Question:</strong>')?>
		<?=Form::textarea('message')?>
	</div>

	<div class="row">
		<?=Form::submit('Send')?>
	</div>
</div>