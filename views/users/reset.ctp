<div class="users form">
<h3><?php echo $this->title_for_layout = __('Forgot Password', true)?></h3>
<?php echo $this->Form->create('User');?>
	<?php
		echo $this->Form->input('email');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
