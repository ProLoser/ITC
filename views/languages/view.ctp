<div class="languages view">
<h2><?php  __('Language');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Language', true)), array('action' => 'edit', $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Language', true)), array('action' => 'delete', $language['Language']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Languages', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Language', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sources', true)), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('controller' => 'sources', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Sources', true));?></h3>
	<?php if (!empty($language['Source'])):?>
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
		foreach ($language['Source'] as $source):
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
