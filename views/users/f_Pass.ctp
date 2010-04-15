<div class="users form">
<h3><?php echo $this->title_for_layout = __('Forgot Password', true)?></h3>
<?php echo $form->create('User', array('action' => 'fPass'. '/' . $this->params['pass'][0] . '/' . $this->params['pass'][1]));?>
	<?php 
			echo $this->Form->input('password', array('type' => 'password'));
			echo $this->Form->input('confirm_password', array('type' => 'password'));
	?>
<?php echo $this->Form->end('Submit');?>
</div>