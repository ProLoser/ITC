<ul>
	<li><h4>Navigation</h4>
		<?php echo $this->element('layouts/navigation'); ?>
	</li>
	<li><h4><?php echo $this->Html->link('Terms of Use', array('controller' => 'pages', 'action' => 'display', 'terms_of_use')); ?></h4></li>
	<li><h4><?php echo $this->Html->link('Privacy Policy', array('controller' => 'pages', 'action' => 'display', 'privacy_policy')); ?></h4></li>
	<li><h4><a href="http://www.artengineered.com">Art Engingeered</a></h4>
		<ul>
			<li><a href="mailto:redjoker88@hotmail.com">Andrew Hipp</a></li>
			<li><a href="http://www.deansofer.com">Dean Sofer</a></li>
			<li><a href="http://www.jaimehernandez.com">Jaime Hernandez</a></li>
			<li><a href="#">Mark Lenser</a></li>
			<li><a href="http://www.nicholaschan.net">Nicholas Chan</a></li>
		</ul>
	</li>
	<li><?php echo $this->Html->image('cake_logo.jpg', array('url' => 'http://www.cakephp.org')); ?></li>
</ul>