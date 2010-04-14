<div class="reviews form">
<h3><?php printf(__('Add %s', true), __('Review', true)); ?></h3>
<?php echo $this->Form->create('Review');?>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('visibility');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>