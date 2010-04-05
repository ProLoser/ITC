<?php
class PointEvent extends AppModel {
	var $name = 'PointEvent';
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