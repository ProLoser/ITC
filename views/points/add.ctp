<div class="points form">
<?php echo $this->Form->create('Point');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Point', true)); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('point_event_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Points', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Point Events', true)), array('controller' => 'point_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Point Event', true)), array('controller' => 'point_events', 'action' => 'add')); ?> </li>
	</ul>
</div>