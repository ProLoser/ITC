<ul class="reviews">
<?php
$i = 0;
foreach ($reviews as $review):
	if (!isset($review['Review'])) {
		$review['Review'] = $review;
	}
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<li<?php echo $class;?>>
	<div class="scores">
		8<span>reviews</span>
		<div>
			<span>votes</span>6
		</div>
	</div>
	<h4><?php echo $this->Html->link($review['Review']['name'], array('action' => 'view', $review['Review']['id'])); ?></h4>
	<p><?php echo $this->Text->truncate($review['Review']['description']); ?></p>
	<p class="userbox">
		<?php echo $this->Html->link(__('Subscribe', true), array('controller' => 'subscriptions', 'action' => 'add', $review['Review']['id'])); ?>
		asked <?php echo $this->Time->timeAgoInWords($review['Review']['created']); ?> by <?php echo $this->Html->link($review['User']['name'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?> <span>[grand puba]</span>
	</p>
<?php endforeach; ?>
</ul>