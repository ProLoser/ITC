<?php
class Rank extends AppModel {
	var $name = 'Rank';
	var $order = 'points ASC';
	var $validate = array(
		'title'   => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'message' => 'Alpha-numeric names only."'
			)
		)
	);
	var $hasMany = array(
		'User'
	);

}
?>