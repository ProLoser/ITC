<div class="subscriptions form">
<h3><?php printf(__('Add %s', true), __('Subscription', true)); ?></h3>
<?php echo $this->Form->create('Subscription');?>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('foreign_id');
		echo $this->Form->input('foreign_model');
		echo $this->Form->input('status');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Subscriptions', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>