<div class="related">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($source['Comment'])):?>
	<?php
		$i = 0;
		foreach ($source['Comment'] as $comment):?>
			<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id']));?>
			<?php //echo $comment['line_start'];?>
			<?php //echo $comment['line_end'];?>
			<?php echo $comment['content'];?>
			<?php //echo $comment['created'];?>
			<?php //echo $comment['vote_count'];?>
	<?php endforeach; ?>
<?php endif; ?>
</div>

