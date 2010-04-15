<div class="subscriptions form">
<h3><?php printf(__('Edit %s', true), __('Subscription', true)); ?></h3>
<?php echo $this->Form->create('Subscription');?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('foreign_id');
		echo $this->Form->input('foreign_model');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Subscription.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Subscription.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Subscriptions', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>