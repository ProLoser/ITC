<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link('My Comments', array('controller' => 'comments', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('My Subscriptions', array('controller' => 'subscriptions', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="reviews index">
	<h3><?php __('Reviews');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('visibility');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reviews as $review):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($review['Review']['name'], array('action' => 'view', $review['Review']['id'])); ?>&nbsp;</td>
		<td><?php echo $review['Review']['visibility']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $review['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['Review']['id'])); ?>
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
		<?php echo $this->Paginator->prev(__('previous', true), array(), null, array('class'=>'disabled'));?>
	  	<?php echo $this->Paginator->numbers();?>

		<?php echo $this->Paginator->next(__('next', true), array(), null, array('class' => 'disabled'));?>
	</div>
</div>