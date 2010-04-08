<?php
class Rank extends AppModel {
	var $name = 'Rank';
	var $order = 'points DESC';

	var $hasMany = array(
		'User'
	);

}
?>