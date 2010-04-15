<div class="users login">
<h3><?php __('Login')?></h3>
<?php echo $this->Form->create('User');?>
	<?php
		echo $this->Form->input('username', array('after' => $this->Html->link('Need to Register?', array('action' => 'register'))));
		echo $this->Form->input('password', array('after' => $this->Html->link('Forgotton Password?', array('action' => 'forgot'))));
	?>
<?php echo $this->Form->end(__('Login', true));?>
</div>
