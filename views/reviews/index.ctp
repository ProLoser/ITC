<div class="reviews index">
	<h3><?php __('Reviews');?></h3>
	<ul class="filters">
		<li>Sort by:</li>
		<li><?php echo $this->Paginator->sort('user_id');?> |</li>
		<li><?php echo $this->Paginator->sort('name');?> |</li>
		<li><a href="#">New</a> |</li>
		<li><a href="#">Old</a> |</li>
		<li><a href="#">Popular</a></li>
	</ul>
	
	<?php
	$i = 0;
	foreach ($reviews as $review):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $review['Review']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['User']['name'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link($review['Review']['name'], array('action' => 'view', $review['Review']['id'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Subscribe', true), array('controller' => 'subscriptions', 'action' => 'add', $review['Review']['id'])); ?>
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


<ul class="reviews">
	<div class="scores">
		8
		<span>reviews</span>
		<div>
			<span>votes</span>
			6
		</div>
	</div>
	<h4></h4>
</ul>

<div class="post">
	<div class="post-numbers">
		<div class="reviews-number">
			<div class="number-of-reviews">8</div>
			<div class="reviews">reviews</div>
		</div>
		<div class="votes-number">
			<div class="votes">votes</div>
			<div class="number-of-votes">6</div>
		</div>
	</div>
	<div class="post-content answered">
		<a href="#" class="post-subject">Where to insert $() in CSS apples?</a>
		<div class="post-summary">Hi, I am trying to include the "flair" in my website. One problem I face is that I cannot change the background color. I went to the flair page and saw that I should use the css style to... </div>
		<a href="#" class="tags">Tags: CSS, HTML, Actionscript</a>
		<ul class="userbox">
			<li>asked 7 hours ago</li>
			<li>by <a href="#">Redjoker88</a>,</li>
			<li><a href="#">Grand Puba</a></li>
		</ul>
	</div>
</div>