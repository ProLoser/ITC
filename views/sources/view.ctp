<?php
	$this->Html->css('geshi', 'stylesheet', array("media"=>"all" ), false);
	$this->Html->css('jquery-ui-1.8.custom', 'stylesheet', array("media"=>"all" ), false);
	$javascript->link('jquery-1.4.2.min.js', false);
	$javascript->link('jquery-ui-1.8.custom.min.js', false);
?>
<script type="text/javascript">
$(function() {
	$(".php").selectable({
		stop: function(){
			var first = $("#select-first").empty();
			var last  = $("#select-last").empty();
			$(".ui-selected", this).each(function(){
				var index = $(".php li").index(this);
				index += 1;
				if (index != 0) {
					last.value(index);
				}
				if (first.value() == "" && index != 0) {
					first.value(index);
				}
			});
		}
	});
	// Modal Box
	$('#feedback').dialog();
});
</script>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Source', true)), array('action' => 'edit', $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Source', true)), array('action' => 'delete', $source['Source']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sources', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('action' => 'add', $source['Review']['id'])); ?> </li>
	</ul>
</div>
<div id="feedback" title="Add Comment">
	<?php echo $this->Form->create('Comment', array('action' => 'add')); ?>
		<?php echo $this->Form->input('line_start', array('id' => 'select-first')); ?>
		<?php echo $this->Form->input('line_end', array('id' => 'select-last')); ?>
		<?php echo $this->Form->input('content'); ?>
		<?php echo $this->Form->input('source_id', array('value' => $source['Source']['id'], 'type' => 'hidden')); ?>
	<?php echo $this->Form->end('Submit'); ?>
</div>
<div class="sources view">
	<h3><?php echo $this->Html->link($source['Review']['name'], array('controller' => 'reviews', 'action' => 'view', $source['Review']['id']));	?>: </h3>
	<?php echo $source['Source']['description']; ?>
	<p>Uploaded <?php echo $this->Time->timeAgoInWords($source['Source']['created']); ?></p>
	<p>Updated <?php echo $this->Time->timeAgoInWords($source['Source']['modified']); ?></p>

	<?php echo $geshi->parse($source['Source']['content'], 'php'); ?>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($source['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
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
		foreach ($source['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['user_id'];?></td>
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

