<?php
class Point extends AppModel {
	var $name = 'Point';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PointEvent' => array(
			'className' => 'PointEvent',
			'foreignKey' => 'point_event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>