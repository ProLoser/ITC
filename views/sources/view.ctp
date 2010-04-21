<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('View %s', true), __('Review', true)), array('controller' => 'reviews', 'action' => 'view', $source['Source']['review_id'])); ?> </li>
	<?php if ($owner): ?>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Source', true)), array('action' => 'edit', $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Source', true)), array('action' => 'delete', $source['Source']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Source', true)), array('action' => 'add', $source['Review']['id'])); ?> </li>
	<?php endif; ?>
	</ul>
</div>
<?php if (!$source['Review']['closed']): ?>
<div id="feedback" title="Add Comment">
	<?php echo $this->Form->create('Comment', array('action' => 'add')); ?>
		<?php echo $this->Form->input('line_start', array('id' => 'select-first')); ?>
		<?php echo $this->Form->input('line_end', array('id' => 'select-last')); ?>
		<?php echo $this->Form->input('content'); ?>
		<?php echo $this->Form->input('source_id', array('value' => $source['Source']['id'], 'type' => 'hidden')); ?>
	<?php echo $this->Form->end('Submit'); ?>
</div>
<?php endif; ?>
<div class="sources view">
	<h4>To comment, simply click and drag the mouse across the lines you wish to comment and let go</h4>
	<h4>You can also review commented lines by click on the comment's line numbers to the left</h4>
	<?php echo $this->ProCode->subscribe('Review', $source['Review']['id']); ?>
	<h3><?php echo $this->Html->link($source['Review']['name'], array('controller' => 'reviews', 'action' => 'view', $source['Review']['id']));	?> </h3>
	<p><?php echo $source['Source']['description']; ?></p>
	<div id="geshi">
		<?php
			$params['header'] = $source['Source']['filename'].' <span>Uploaded:'.$this->Time->timeAgoInWords($source['Source']['created']).' Updated:'.$this->Time->timeAgoInWords($source['Source']['modified'].'</span>');
			if (isset($this->params['named']['comment'])) {
				$params['start'] = $source['Comment'][$this->params['named']['comment']]['line_start'];
				$params['end'] = $source['Comment'][$this->params['named']['comment']]['line_end'];
			}
			echo $geshi->parse($source['Source']['content'], $source['Language']['key'], $params);
		?>
	</div>
</div>

