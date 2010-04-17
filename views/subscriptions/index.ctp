<div class="actions">
	<ul>	
		<li><?php echo $this->Html->link('My Reviews', array('controller' => 'reviews', 'action' => 'mine')); ?></li>
		<li><?php echo $this->Html->link('My Comments', array('controller' => 'comments', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="subscriptions index">
	<h3><?php __('Subscriptions');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('foreign_model');?></th>
		<th>Subscribed To</th>
		<th><?php echo $this->Paginator->sort('pending');?></th>
		<th><?php echo $this->Paginator->sort('created');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscriptions as $subscription):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subscription['Subscription']['foreign_model']; ?>&nbsp;</td>
	<?php if (!empty($subscription['Review']['id'])): ?>
		<td><?php echo $this->Html->link($subscription['Review']['name'], array('controller' => 'reviews', 'action' => 'view', $subscription['Review']['id'])); ?>&nbsp;</td>
	<?php else: ?>
		<td><?php echo $this->Html->link($subscription['Subscribee']['username'], array('controller' => 'users', 'action' => 'view', $subscription['Subscribee']['id'])); ?>&nbsp;</td>
	<?php endif; ?>
		<td><?php echo $subscription['Subscription']['pending']; ?>&nbsp;</td>
		<td><?php echo $this->Time->timeAgoInWords($subscription['Subscription']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subscription['Subscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['Subscription']['id'])); ?>
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