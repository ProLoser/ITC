<div class="points index">
	<h3><?php __('Points');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('point_event_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($points as $point):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $point['Point']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($point['User']['name'], array('controller' => 'users', 'action' => 'view', $point['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($point['PointEvent']['name'], array('controller' => 'point_events', 'action' => 'view', $point['PointEvent']['id'])); ?>
		</td>
		<td><?php echo $point['Point']['created']; ?>&nbsp;</td>
		<td><?php echo $point['Point']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $point['Point']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $point['Point']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $point['Point']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $point['Point']['id'])); ?>
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