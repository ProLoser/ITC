<?php
class PointEvent extends AppModel {
	var $name = 'PointEvent';
	var $validation = array(
		'id' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Please enter a unique key',
			),
			'minLength' => array(
				'rule' => array('maxLength', 4),
				'message' => 'Please enter at least 4 characters',
			),
			'maxLength' => array(
				'rule' => array('maxLength', 30),
				'message' => 'Please don\'t exceed 30 characters',
			),
			'characters' => array(
				'rule' => '/^[a-z0-9\-]*$/',
				'message' => 'Please enter lower-case letters, numbers or dashes only',
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Point' => array(
			'className' => 'Point',
			'foreignKey' => 'point_event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>