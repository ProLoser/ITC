<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Review', true)), array('controller' => 'reviews', 'action' => 'add')); ?></li>
	</ul>
</div>
<div class="reviews index">
	<h3><?php __('Reviews');?></h3>
	<ul class="filters">
		<li>Sort by:</li>
		<li><?php echo $this->Paginator->sort('user_id');?> |</li>
		<li><?php echo $this->Paginator->sort('name');?> |</li>
		<li>Filter by:</li>
		<li><?php echo $this->Paginator->sort('user_id');?> |</li>
		<li><?php echo $this->Paginator->sort('name');?> |</li>
		<li><?php echo $this->Paginator->sort('created');?></li>
		<li><?php echo $this->Paginator->sort('created');?></li>
	</ul>
	
	<?php echo $this->element('reviews/index', array('reviews' => $reviews)); ?>
	
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