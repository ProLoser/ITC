<div class="actions">
	<ul>
	<?php if ($owner): ?>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Review', true)), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Review', true)), array('action' => 'delete', $review['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['Review']['id'])); ?> </li>
		<?php if (!$review['Review']['closed']): ?>
		<li><?php echo $this->Html->link(sprintf(__('Close %s', true), __('Review', true)), array('action' => 'close', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Add %s', true), __('Source', true)), array('controller' => 'sources', 'action' => 'add', $review['Review']['id'])); ?> </li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
</div>
<div class="reviews view">
	<?php echo $this->ProCode->subscribe('Review', $review['Review']['id']); ?> <?php if ($review['Review']['closed']) echo '<span class="closed">[CLOSED]</span>'; ?>
	<h3><?php  __('Review');?>: <?php echo $review['Review']['name']; ?></h3>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($review['User']['username'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visibility'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['visibility']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="tabs">
	<ul>
		<li><a href="#relComments">Sources</a></li>
		<li><a href="#relSubscribers">Subscribers</a></li>
	</ul>
	<div id="relComments">
		<?php if (!empty($review['Source'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('File Name'); ?></th>
			<th><?php __('Language'); ?></th>
			<th><?php __('Uploaded'); ?></th>
			<th><?php __('Updated'); ?></th>
			<th><?php __('Description'); ?></th>
			<?php if ($owner): ?><th class="actions"><?php __('Actions');?></th><?php endif; ?>
		</tr>
		<?php
			$i = 0;
			foreach ($review['Source'] as $source):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $this->Html->link($source['filename'], array('controller' => 'sources', 'action' => 'view', $source['id'])); ?></td>
				<td><?php echo $source['Language']['name'];?></td>
				<td><?php echo $this->Time->timeAgoInWords($source['created']);?></td>
				<td><?php echo $source['modified'];?></td>
				<td><?php echo $source['description'];?></td>
				<?php if ($owner): ?><td class="actions">
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sources', 'action' => 'edit', $source['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sources', 'action' => 'delete', $source['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['id'])); ?>
				</td><?php endif; ?>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	
	<div id="relSubscribers">
		<?php if (!empty($user['Subscriber'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('User'); ?></th>
			<th><?php __('Pending'); ?></th>
			<th><?php __('Created'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Subscriber'] as $subscription):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $subscription['user_id'];?></td>
				<td><?php echo $subscription['pending'];?></td>
				<td><?php echo $subscription['created'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>
