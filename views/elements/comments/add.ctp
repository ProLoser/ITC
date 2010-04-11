<div class="comments form">
<?php echo $this->Form->create('Comment', array('url' => array('controller' => 'comments', 'action' => 'add', $id));?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Comment', true)); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('source_id');
		echo $this->Form->input('line_start');
		echo $this->Form->input('line_end');
		echo $this->Form->input('content');
		echo $this->Form->input('vote_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>