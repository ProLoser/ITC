<div id="sidebar">
	<h3>Popular <span>Tags</span></h3>
	<ul>
		<li><a href="#">CSS</a></li>
		<li><a href="#">Java</a></li>
		<li><a href="#">Javascript</a></li>
		<li><a href="#">PHP</a></li>
		<li><a href="#">something</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">CSS</a></li>
	</ul>
	<h3>Popular <span><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></span></h3>
	<ul>
		<?php foreach ($popUsers as $id => $user): ?>
			<li><?php echo $this->Html->link($user, array('controller' => 'users', 'action' => 'view', $id)); ?></li>
		<?php endforeach; ?>
	</ul>
	<p class="adbox">Ad Space Available</p>
	<p class="adbox">Ad Space Available</p>
</div>