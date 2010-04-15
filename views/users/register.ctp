<?php $this->set('actions', array(
	$this->Html->link(__('Forgotten Password?', true), array('action' => 'reset')),
)); ?>
<div class="users form">
<h3><?php echo $this->title_for_layout = __('Register', true)?></h3>
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm_password', array('type' => 'password'));	
		echo $this->Form->input('name');
		echo $this->Form->input('avatar', array('type' => 'file'));
		echo $this->Form->input('website');
		echo $this->Form->input('date_of_birth', array('minYear' => 1900, 'maxYear' => date('Y')));
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
