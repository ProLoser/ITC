<div class="sources form">
<h3><?php printf(__('Edit %s', true), __('Source', true)); ?></h3>
<?php echo $this->Form->create('Source', array('type' => 'file'));?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content');
		echo $this->Form->input('description');
		echo $this->Form->input('source', array('type' => 'file'));
		echo $this->Form->input('visibility');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Source.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Source.id'))); ?></li>
	</ul>
</div>