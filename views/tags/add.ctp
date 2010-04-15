<div class="tags form">
<h3><?php printf(__('Add %s', true), __('Tag', true)); ?></h3>
<?php echo $this->Form->create('Tag');?>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Review');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Reviews', true)), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Review', true)), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>