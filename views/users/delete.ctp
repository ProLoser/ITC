<div class="users close">
	<h3><?php __('Close Account'); ?></h3>
	<h3><?php __('What\'s a matter Colonel Sanders? CHICKEN???'); ?></h3>
	<?php
		echo $this->Form->create('User');
		echo $this->Form->submit('Yes', array('name' => 'data[confirm]'));
		echo $this->Form->submit('No', array('name' => 'data[confirm]'));
		echo $this->Form->end();
	?>
</div>