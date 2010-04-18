<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Close %s', true), __('Review', true)), array('action' => 'close', $this->data['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Review', true)), array('action' => 'delete', $this->data['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->data['Review']['id'])); ?> </li>
	</ul>
</div>
<div class="reviews form">
<h3><?php printf(__('Edit %s', true), __('Review', true)); ?></h3>
<?php echo $this->Form->create('Review');?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('visibility');
		echo $this->Form->input('description');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>