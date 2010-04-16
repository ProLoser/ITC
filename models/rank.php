<?php
class Rank extends AppModel {
	var $name = 'Rank';
	var $order = 'points ASC';
	var $validate = array(
		'title'   => array(
			'alphaNumeric' => array(
				'rule' => '/^[\\w\\s]+$/',
				'required' => true,
				'message' => 'Alpha-numeric names only."'
			)
		),
		'points' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Please numbers only.'
			),
			'range' => array(
				'rule' => array('range', -2147483648, 2147483647),
				'message' => 'Out of range.'
			),
		)
	);
	var $hasMany = array(
		'User'
	);

}
?>