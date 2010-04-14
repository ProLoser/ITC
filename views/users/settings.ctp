<div class="users form">
<h3><?php printf(__('Edit %s', true), __('User', true)); ?></h3>
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('avatar', array('type' => 'file'));
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Update Password', true), array('action' => 'password')); ?></li>
		<li><?php echo $this->Html->link(__('Close Account', true), array('action' => 'delete'), array('class' => 'delete')); ?></li>
	</ul>
</div>
