<div class="sources form">
<h3><?php printf(__('Edit %s', true), __('Source', true)); ?></h3>
<?php echo $this->Form->create('Source', array('type' => 'file'));?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('review_id');
		echo $this->Form->input('language_id');
		echo $this->Form->input('content');
		echo $this->Form->input('description');
		echo $this->Form->input('source', array('type' => 'file'));
		echo $this->Form->input('visibility');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Source.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Source.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sources', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Reviews', true)), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Review', true)), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Languages', true)), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Language', true)), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Comments', true)), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Comment', true)), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>