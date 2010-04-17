<ul class="reviews">
<?php
$i = 0;
foreach ($reviews as $review):
	if (!isset($review['Review'])) {
		$review['Review'] = $review;
	}
	$class = null;
	if ($review['Review']['closed']) {
		$class = ' class="closed"';
	}
?>
<li<?php echo $class;?>>
	<?php echo $this->ProCode->subscribe('Review', $review['Review']['id']); ?>
	<div class="scores">
		8<span>comments</span>
		<div>
			<span>votes</span>6
		</div>
	</div>
	<h4><?php echo $this->Html->link($review['Review']['name'], array('action' => 'view', $review['Review']['id'])); ?></h4>
	<p><?php echo $this->Text->truncate($review['Review']['description']); ?></p>
	<p class="userbox">
		asked <?php echo $this->Time->timeAgoInWords($review['Review']['created']); ?> by <?php echo $this->Html->link($review['User']['username'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?> <span>[grand puba]</span>
	</p>
<?php endforeach; ?>
</ul>