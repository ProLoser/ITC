<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('avatar', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Update Password', true), array('action' => 'password')); ?></li>
		<li><?php echo $this->Html->link(__('Close Account', true), array('action' => 'delete'), array('class' => 'delete')); ?></li>
		<li><?php echo $this->Html->link(__('Logout', true), array('action' => 'logout')); ?></li>
	</ul>
</div>
