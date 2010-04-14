<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('avatar', array('type' => 'file'));
		echo $this->Form->input('website');
		echo $this->Form->input('points');
		echo $this->Form->input('status');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>