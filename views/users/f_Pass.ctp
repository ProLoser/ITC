<div class="users form">
<?php echo $form->create('User', array('action' => 'fPass'. '/' . $this->params['pass'][0] . '/' . $this->params['pass'][1]));?>
	<fieldset>
 		<legend><?php echo $this->title_for_layout = __('Forgot Password', true)?></legend>
		
	<?php 
			echo $this->Form->input('password', array('type' => 'password'));
			echo $this->Form->input('confirm_password', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>