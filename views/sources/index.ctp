<div class="sources index">
	<h3><?php __('Sources');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('review_id');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('file_name');?></th>
			<th><?php echo $this->Paginator->sort('visibility');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sources as $source):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $source['Source']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($source['Review']['name'], array('controller' => 'reviews', 'action' => 'view', $source['Review']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($source['Language']['name'], array('controller' => 'languages', 'action' => 'view', $source['Language']['id'])); ?>
		</td>
		<td><?php echo $source['Source']['created']; ?>&nbsp;</td>
		<td><?php echo $source['Source']['modified']; ?>&nbsp;</td>
		<td><?php echo $source['Source']['content']; ?>&nbsp;</td>
		<td><?php echo $source['Source']['description']; ?>&nbsp;</td>
		<td><?php echo $source['Source']['file_name']; ?>&nbsp;</td>
		<td><?php echo $source['Source']['visibility']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $source['Source']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $source['Source']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $source['Source']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['Source']['id'])); ?>
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
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Reviews', true)), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Review', true)), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Languages', true)), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Language', true)), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Comments', true)), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Comment', true)), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>