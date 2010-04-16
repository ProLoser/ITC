<?php $links = array(
	'Reviews' => array('controller' => 'reviews', 'action' => 'index'),
	'Users' => array('controller' => 'users', 'action' => 'index'),
	'Help' => array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions'),
); ?>
<ul>
	<?php foreach ($links as $label => $link): ?>
		<?php $active = ($this->params['controller'] == strtolower($label)) ? array('class' => 'current') : array(); ?>
		<li><?php echo $this->Html->link($label, $link, $active);?></li>
	<?php endforeach; ?>
</ul>