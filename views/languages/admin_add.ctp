<div class="languages form">
<?php echo $this->Form->create('Language');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Language', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>