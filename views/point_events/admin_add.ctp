<div class="pointEvents form">
<?php echo $this->Form->create('PointEvent');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Point Event', true)); ?></legend>
	<?php
		echo $this->Form->input('id', array('type' => 'text'));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('points');
		echo $this->Form->input('foreign_model', array('empty' => '-- None --'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Point Events', true)), array('action' => 'index'));?></li>
	</ul>
</div>