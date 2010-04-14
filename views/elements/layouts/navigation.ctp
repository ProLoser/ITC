<ul>
	<li><?php echo $this->Html->link('Reviews', array('controller' => 'reviews', 'action' => 'index'), array('class' => 'current')); ?></li>
	<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Ranks', array('controller' => 'ranks', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Points', array('controller' => 'point_events', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('FAQ', array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions'));?></li>
</ul>