<div class="ranks view">
	<h3><?php echo $rank['Rank']['title']; ?> [<?php echo $rank['Rank']['points']; ?> Points]</h3>
	<?php echo $rank['Rank']['description']; ?>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Users', true));?></h3>
	<?php if (!empty($rank['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Username'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Avatar'); ?></th>
		<th><?php __('Websites'); ?></th>
		<th><?php __('Point Count'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Rank Id'); ?></th>
		<th><?php __('Date Of Birth'); ?></th>
		<th><?php __('Role'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rank['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $this->Upload->image($user, 'avatar');?></td>
			<td><?php echo $user['websites'];?></td>
			<td><?php echo $user['points'];?></td>
			<td>Joined <?php echo $this->Time->timeAgoInWords($user['created']);?></td>
			<td><?php echo $user['status'];?></td>
			<td><?php echo $user['rank_id'];?></td>
			<td><?php echo $user['date_of_birth'];?></td>
			<td><?php echo $user['role'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
