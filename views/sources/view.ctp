<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('View %s', true), __('Review', true)), array('controller' => 'review', 'action' => 'view', $source['Source']['review_id'])); ?> </li>
	<?php if ($owner): ?>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Source', true)), array('action' => 'edit', $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Source', true)), array('action' => 'delete', $source['Source']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('action' => 'add', $source['Review']['id'])); ?> </li>
	<?php endif; ?>
	</ul>
</div>
<div id="feedback" title="Add Comment">
	<?php echo $this->Form->create('Comment', array('action' => 'add')); ?>
		<?php echo $this->Form->input('line_start', array('id' => 'select-first')); ?>
		<?php echo $this->Form->input('line_end', array('id' => 'select-last')); ?>
		<?php echo $this->Form->input('content'); ?>
		<?php echo $this->Form->input('source_id', array('value' => $source['Source']['id'], 'type' => 'hidden')); ?>
	<?php echo $this->Form->end('Submit'); ?>
</div>
<div class="sources view">
	<h3><?php echo $this->Html->link($source['Review']['name'], array('controller' => 'reviews', 'action' => 'view', $source['Review']['id']));	?>: </h3>
	<?php echo $source['Source']['description']; ?>
	<p>Uploaded <?php echo $this->Time->timeAgoInWords($source['Source']['created']); ?></p>
	<p>Updated <?php echo $this->Time->timeAgoInWords($source['Source']['modified']); ?></p>

	<?php echo $geshi->parse($source['Source']['content'], $source['Language']['name']); ?>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($source['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('User Name'); ?></th>
		<th><?php __('Line Start'); ?></th>
		<th><?php __('Line End'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Vote Count'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($source['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id']));?></td>
			<td><?php echo $comment['line_start'];?></td>
			<td><?php echo $comment['line_end'];?></td>
			<td><?php echo $comment['content'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['vote_count'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

