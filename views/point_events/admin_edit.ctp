<div class="pointEvents form">
<?php echo $this->Form->create('PointEvent');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Point Event', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('points');
		echo $this->Form->input('key');
		echo $this->Form->input('foreign_model');
		echo $this->Form->input('foreign_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PointEvent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PointEvent.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Point Events', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Points', true)), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Point', true)), array('controller' => 'points', 'action' => 'add')); ?> </li>
	</ul>
</div>