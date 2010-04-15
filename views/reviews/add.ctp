<div class="reviews form">
<h3><?php printf(__('Add %s', true), __('Review', true)); ?></h3>
<?php echo $this->Form->create('Review');?>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Language', array('multiple' => 'checkbox'));
		echo $this->Form->input('visibility');
		echo $this->Form->input('description');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>