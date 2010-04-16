<div class="reviews form">
<h3>Create A Review</h3>
<?php echo $this->Form->create('Review', array('type' => 'file'));?>
<fieldset>
	<?php
		echo $this->Form->input('Review.name');
		echo $this->Form->input('Review.visibility');
		echo $this->Form->input('Review.description');
	?>
</fieldset>
<fieldset>
	<legend><?php __('Source Files'); ?></legend>
	<?php
		for ($i = 0; $i < $copies; $i++) {				
			echo $this->Form->input("Source.$i.file", array('type' => 'file'));
			echo $this->Form->input("Source.$i.language_id");
			echo $this->Form->input("Source.$i.description");
		}
	?>
</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>