<div class="users login">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Login')?></legend>
	<?php
		echo $this->Form->input('username', array('after' => $this->Html->link('Need to Register?', array('action' => 'register'))));
		echo $this->Form->input('password', array('after' => $this->Html->link('Forgotton Password?', array('action' => 'forgot'))));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login', true));?>
</div>
