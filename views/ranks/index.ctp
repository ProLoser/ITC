<div class="ranks index">
	<h3><?php __('Ranks');?></h3>
	<dl>
	<?php
	$i = 0;
	foreach ($ranks as $rank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
		<dt<?php echo $class;?>>
			<?php echo $this->Html->link($rank['Rank']['title'], array('action' => 'view', $rank['Rank']['id'])); ?>
			<?php echo $rank['Rank']['points']; ?>
		</dt>
		<dd>
			<?php echo $rank['Rank']['description']; ?>
		</dd>
	<?php endforeach; ?>
	</dl>
</div>