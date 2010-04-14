<?php echo $this->Form->create('Review', array('action' => 'search')); ?>
	<?php echo $this->Form->input('terms', array('label' => false)); ?>
<?php echo $this->Form->end('Search'); ?>