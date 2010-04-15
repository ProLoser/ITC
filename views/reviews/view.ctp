<div class="reviews view">
<?php echo $this->element('subscribe', array('id' => $user['User']['id'], 'model' => 'User')); ?>
<h3><?php  __('Review');?></h3>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($review['User']['name'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $review['Review']['name']; ?>
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Review', true)), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Review', true)), array('action' => 'delete', $review['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Reviews', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Review', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sources', true)), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Sources', true));?></h3>
	<?php if (!empty($review['Source'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Review Id'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('File Name'); ?></th>
		<th><?php __('Visibility'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
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
			<td><?php echo $source['id'];?></td>
			<td><?php echo $source['review_id'];?></td>
			<td><?php echo $source['language_id'];?></td>
			<td><?php echo $source['created'];?></td>
			<td><?php echo $source['modified'];?></td>
			<td><?php echo $source['content'];?></td>
			<td><?php echo $source['description'];?></td>
			<td><?php echo $source['file_name'];?></td>
			<td><?php echo $source['visibility'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sources', 'action' => 'view', $source['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sources', 'action' => 'edit', $source['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sources', 'action' => 'delete', $source['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('controller' => 'sources', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Tags', true));?></h3>
	<?php if (!empty($review['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($review['Tag'] as $tag):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['name'];?></td>
			<td><?php echo $tag['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
