<div class="ranks form">
<?php echo $this->Form->create('Rank');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Rank', true)); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('points');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ranks', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>