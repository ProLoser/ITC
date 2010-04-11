<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Controllers (Tables)</h1>
			<ul>
				<li><?php echo $this->Html->link('Comments', array('controller' => 'comments'))?></li>
				<li><?php echo $this->Html->link('Languages', array('controller' => 'languages'))?></li>
				<li><?php echo $this->Html->link('Points', array('controller' => 'points'))?></li>
				<li><?php echo $this->Html->link('Point Events', array('controller' => 'point_events'))?></li>
				<li><?php echo $this->Html->link('Ranks', array('controller' => 'ranks'))?></li>
				<li><?php echo $this->Html->link('Reviews', array('controller' => 'reviews'))?></li>
				<li><?php echo $this->Html->link('Sources (Files)', array('controller' => 'sources'))?></li>
				<li><?php echo $this->Html->link('Subscriptions', array('controller' => 'subscriptions'))?></li>
				<li><?php echo $this->Html->link('Tags', array('controller' => 'tags'))?></li>
				<li><?php echo $this->Html->link('Users', array('controller' => 'users'))?></li>
				<li><?php echo $this->Html->link('Votes', array('controller' => 'votes'))?></li>
			</ul>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>