<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('FAQ', array('controller' => 'pages', 'action' => 'display', 'frequently_asked_questions')); ?></li>
		<li><?php echo $this->Html->link('Ranks', array('controller' => 'ranks', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Terms of Use', array('controller' => 'pages', 'action' => 'display', 'terms_of_use')); ?></li>
		<li><?php echo $this->Html->link('Privacy Policy', array('controller' => 'pages', 'action' => 'display', 'privacy_policy')); ?></li>
	</ul>
</div>
<div class="pointEvents index">
	<h3><?php __('Point Events');?></h3>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('foreign_model');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pointEvents as $pointEvent):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pointEvent['PointEvent']['name']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($pointEvent['PointEvent']['description'], array('action' => 'view', $pointEvent['PointEvent']['id'])); ?>&nbsp;</td>
		<td><?php echo $pointEvent['PointEvent']['points']; ?>&nbsp;</td>
		<td><?php echo $pointEvent['PointEvent']['foreign_model']; ?>&nbsp;</td>
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