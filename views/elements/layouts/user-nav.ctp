<ul>
<?php if ($this->Session->read('Auth.User')): ?>
	<li class="user"><?php echo $this->Html->link($this->Session->read('Auth.User.username'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
	<li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
	<li><?php echo $this->Html->link('My Account', array('controller' => 'users', 'action' => 'settings')); ?></li>
	<li><?php echo $this->Html->link('My Stuff', array('controller' => 'reviews', 'action' => 'mine')); ?></li>
<?php else: ?>
	<li><?php echo $this->Html->link('Sign Up', array('controller' => 'users', 'action' => 'register')); ?></li>
	<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
<?php endif; ?>
</ul>