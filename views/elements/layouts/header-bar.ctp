<div id="bar">
	<?php echo $this->element('layouts/search'); ?>
	<ul>
	<?php if ($this->Session->read('Auth.User')): ?>
		<li><?php echo $this->Html->link($this->Session->read('Auth.User.username'), array('controller' => 'users', 'action' => 'settings')); ?></li>
		<li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
		<li><?php echo $this->Html->link('My Reviews', array('controller' => 'reviews', 'action' => 'mine')); ?></li>
		<li><?php echo $this->Html->link('My Subscriptions', array('controller' => 'subscriptions', 'action' => 'index')); ?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
		<li><?php echo $this->Html->link('Sign Up', array('controller' => 'users', 'action' => 'register')); ?></li>
	<?php endif; ?>
	</ul>
	<?php echo $this->Html->image('procode_small.jpg', array('url' => '/')); ?>
</div>