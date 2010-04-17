<div id="sideComments">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($source['Comment'])):?>
	<ul>
	<?php
		$i = 0;
		foreach ($source['Comment'] as $comment):?>
		<li>
			<div class="top">
				<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id']));?>
				[<?php echo $comment['User']['Rank']['title']?>]
				<span>Lines <?php echo $comment['line_start'];?>:<?php echo $comment['line_end'];?></span>
			</div>
			<div class="content"><?php echo $comment['content'];?></div>
			<div class="bottom">
				<?php echo $comment['vote_count'];?>
				<?php echo $this->ProCode->vote('Comment', $comment['id']); ?><?php echo $this->ProCode->vote('Comment', $comment['id'], false); ?>
			</div>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php else: ?>
	<p>There are no comments at this time</p>
	<?php endif; ?>
</div>

