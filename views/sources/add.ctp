<div class="sources form">
<h3><?php printf(__('Add %s', true), __('Source', true)); ?></h3>
<?php echo $this->Form->create('Source', array('type' => 'file'));?>
	<?php
		echo $this->Form->input('review_id');
		echo $this->Form->input('content');
		echo $this->Form->input('description');
		echo $this->Form->input('source', array('type' => 'file'));
		echo $this->Form->input('visibility');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>