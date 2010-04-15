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