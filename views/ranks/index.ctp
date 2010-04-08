<div class="ranks index">
	<h2><?php __('Ranks');?></h2>
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
		<?php echo $rank['Rank']['title']; ?>
		<?php echo $rank['Rank']['points']; ?>
	</dt>
	<dd>
		<?php echo $rank['Rank']['description']; ?>
	</dd>
<?php endforeach; ?>
	</dl>