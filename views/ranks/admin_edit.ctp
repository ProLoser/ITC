<div class="ranks form">
<?php echo $this->Form->create('Rank');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Rank', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('points');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Rank.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Rank.id'))); ?></li>
	</ul>
</div>