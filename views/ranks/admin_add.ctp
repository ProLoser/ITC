<div class="ranks form">
<?php echo $this->Form->create('Rank');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Rank', true)); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('points');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>