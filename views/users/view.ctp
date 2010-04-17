<div class="actions">
	<ul>
		<li><?php echo $this->ProCode->subscribe('User', $user['User']['id']); ?></li>
	</ul>
</div>
<div class="users view">
	<?php echo $this->Upload->image($user, 'User.avatar'); ?>
	<h3><?php echo $user['User']['username']; ?></h3>
	<h4><?php echo $this->Html->link($user['Rank']['title'], array('controller' => 'ranks', 'action' => 'view', $user['Rank']['id'])); ?></h4>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['website']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Since:'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Time->timeAgoInWords($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Age'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proCode->calculateAge($user['User']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['role']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="tabs">
	<ul>
		<li><a href="#relComments">Comments</a></li>
		<li><a href="#relPoints">Points</a></li>
		<li><a href="#relReviews">Reviews</a></li>
		<li><a href="#relSubscriptions">Subscriptions</a></li>
		<li><a href="#relSubscribers">Subscribers</a></li>
		<li><a href="#relVotes">Votes</a></li>
	</ul>
	<div id="relComments">
		<?php if (!empty($user['Comment'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Source Id'); ?></th>
			<th><?php __('Line Start'); ?></th>
			<th><?php __('Line End'); ?></th>
			<th><?php __('Content'); ?></th>
			<th><?php __('Created'); ?></th>
			<th><?php __('Modified'); ?></th>
			<th><?php __('Vote Count'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Comment'] as $comment):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $comment['source_id'];?></td>
				<td><?php echo $comment['line_start'];?></td>
				<td><?php echo $comment['line_end'];?></td>
				<td><?php echo $comment['content'];?></td>
				<td><?php echo $comment['created'];?></td>
				<td><?php echo $comment['modified'];?></td>
				<td><?php echo $comment['vote_count'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<div id="relPoints">
		<?php if (!empty($user['Point'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Point Event'); ?></th>
			<th><?php __('Created'); ?></th>
			<th><?php __('Foreign Id'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Point'] as $point):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $point['PointEvent']['name'];?></td>
				<td><?php echo $this->Time->timeAgoInWords($point['created']);?></td>
				<td><?php echo $point['foreign_id'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<div id="relReviews">
		<?php if (!empty($user['Review'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Name'); ?></th>
			<th><?php __('Visibility'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Review'] as $review):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $this->Html->link($review['name'], array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?></td>
				<td><?php echo $review['visibility'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<div id="relSubscriptions">
		<?php if (!empty($user['Subscription'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Foreign Id'); ?></th>
			<th><?php __('Subscribed To'); ?></th>
			<th><?php __('Status'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Subscription'] as $subscription):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $subscription['foreign_id'];?></td>
				<td><?php echo $subscription['foreign_model'];?></td>
				<td><?php echo $subscription['status'];?></td>
				<td><?php echo $subscription['created'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['id'])); ?>
				</td>
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
			<th><?php __('Status'); ?></th>
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
				<td><?php echo $subscription['status'];?></td>
				<td><?php echo $subscription['created'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<div id="relVotes">
		<?php if (!empty($user['Vote'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Comment'); ?></th>
			<th><?php __('Direction'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($user['Vote'] as $vote):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $vote['comment_id'];?></td>
				<td><?php echo $vote['direction'];?></td>
				<td><?php echo $vote['created'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'votes', 'action' => 'view', $vote['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'votes', 'action' => 'edit', $vote['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'votes', 'action' => 'delete', $vote['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vote['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>