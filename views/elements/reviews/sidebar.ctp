<div class="related">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($source['Comment'])):?>
	<?php
		$i = 0;
		foreach ($source['Comment'] as $comment):?>
		<div class="commentBox">
			<div class="commentTop">
			<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id']));?>
			<?php echo $comment['User']['Rank']['title']?>
			<a class="subscribe" href="#">Subscribe to user</a>
			<?php //echo $comment['line_start'];?>
			<?php //echo $comment['line_end'];?>
			</div>
			<?php echo $comment['content'];?>
			<div class="commentBottom">
			<?php echo $comment['vote_count'];?>
			<a class="thumbsUp" href="#">Thumbs Up</a><a class="thumbsDown" href="#">Thumbs Down</a>
			<?php //echo $comment['created'];?>
			<?php //echo $comment['vote_count'];?>
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
</div>

