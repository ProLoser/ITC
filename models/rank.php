<?php
class Rank extends AppModel {
	var $name = 'Rank';
	var $order = 'points ASC';

	var $hasMany = array(
		'User'
	);

}
?>