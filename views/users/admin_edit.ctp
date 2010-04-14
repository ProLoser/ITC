<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
	</ul>
</div>