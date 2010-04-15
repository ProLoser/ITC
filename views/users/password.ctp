<?php $this->set('actions', array(
	$this->Html->link(__('Edit User', true), array('action' => 'edit')),
	$this->Html->link(__('Logout', true), array('action' => 'logout')),
)); ?>
<div class="users form">
<h3><?php echo $this->title_for_layout = __('Update Password', true)?></h3>
<?php echo $this->Form->create('User');?>
	<?php
		echo $this->Form->input('old_password', array('type' => 'password'));
		echo $this->Form->input('password', array('type' => 'password'));
		echo $this->Form->input('confirm_password', array('type' => 'password'));
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>