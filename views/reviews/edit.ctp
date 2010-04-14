<div class="reviews form">
<?php echo $this->Form->create('Review');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Review', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('visibility');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Review.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Review.id'))); ?></li>
	</ul>
</div>