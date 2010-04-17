<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('FAQ', array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions')); ?></li>
		<li><?php echo $this->Html->link('Points', array('controller' => 'point_events', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Terms of Use', array('controller' => 'pages', 'action' => 'display', 'terms_of_use')); ?></li>
		<li><?php echo $this->Html->link('Privacy Policy', array('controller' => 'pages', 'action' => 'display', 'privacy_policy')); ?></li>
	</ul>
</div>
<div class="ranks index">
	<h3><?php __('Ranks');?></h3>
	<dl>
	<?php
	$i = 0;
	foreach ($ranks as $rank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
		<dt<?php echo $class;?>>
			<?php echo $rank['Rank']['title']; ?>
			<?php echo $rank['Rank']['points']; ?>
		</dt>
		<dd>
			<?php echo $rank['Rank']['description']; ?>
		</dd>
	<?php endforeach; ?>
	</dl>
</div>