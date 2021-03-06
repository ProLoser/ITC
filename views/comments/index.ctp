<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link('My Reviews', array('controller' => 'reviews', 'action' => 'mine')); ?></li>
		<li><?php echo $this->Html->link('My Subscriptions', array('controller' => 'subscriptions', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="comments index">
	<h3><?php __('Comments');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('source_id');?></th>
			<th><?php echo $this->Paginator->sort('line_start');?></th>
			<th><?php echo $this->Paginator->sort('line_end');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($comments as $comment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comment['Source']['filename'], array('controller' => 'sources', 'action' => 'view', $comment['Source']['id'])); ?>
		</td>
		<td><?php echo $comment['Comment']['line_start']; ?>&nbsp;</td>
		<td><?php echo $comment['Comment']['line_end']; ?>&nbsp;</td>
		<td><?php echo $comment['Comment']['content']; ?>&nbsp;</td>
		<td><?php echo $this->Time->timeAgoInWords($comment['Comment']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $comment['Comment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $comment['Comment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	  	<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>