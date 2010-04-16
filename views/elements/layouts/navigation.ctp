<ul>
	<?php if ($this->params['controller']=='reviews'): ?>
		<li><?php echo $this->Html->link('Reviews', array('controller' => 'reviews', 'action' => 'index'), array('class' => 'current')); ?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('Reviews', array('controller' => 'reviews', 'action' => 'index')); ?></li>
	<?php endif; ?>
	<?php if ($this->params['controller']=='users'): ?>
		<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'), array('class' => 'current'));?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'));?></li>
	<?php endif; ?>
	<?php if ($this->params['controller']=='ranks'): ?>
		<li><?php echo $this->Html->link('Ranks', array('controller' => 'ranks', 'action' => 'index'), array('class' => 'current'));?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('Ranks', array('controller' => 'ranks', 'action' => 'index'));?></li>
	<?php endif; ?>
	<?php if ($this->params['controller']=='point_events'): ?>
		<li><?php echo $this->Html->link('Points', array('controller' => 'point_events', 'action' => 'index'), array('class' => 'current'));?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('Points', array('controller' => 'point_events', 'action' => 'index'));?></li>
	<?php endif; ?>
	<?php if ($this->params['controller']=='pages'): ?>
		<li><?php echo $this->Html->link('FAQ', array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions'), array('class' => 'current'));?></li>
	<?php else: ?>
		<li><?php echo $this->Html->link('FAQ', array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions'));?></li>
	<?php endif; ?>
</ul>