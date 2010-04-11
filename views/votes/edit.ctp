<div class="votes form">
<?php echo $this->Form->create('Vote');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Vote', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comment_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('direction');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Vote.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Vote.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Votes', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Comments', true)), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Comment', true)), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>