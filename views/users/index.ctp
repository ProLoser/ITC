<div class="users index">
	<h3><?php __('Users');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('rank_id');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id'])); ?>&nbsp;</td>
		<td><?php echo $user['User']['points']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Rank']['title'], array('controller' => 'ranks', 'action' => 'view', $user['Rank']['id'])); ?>
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
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true), array(), null, array('class' => 'disabled'));?>
	</div>
</div>