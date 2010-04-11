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
	
	// Updates the related user field with updated points and ranks
	function afterSave($created) {
		debug($this->data);
		// Update the user's Points
		$pointEvent = $this->PointEvent->find('first', array(
			'conditions' => array('PointEvent.id' => $this->data['Point']['point_event_id']),
			'fields' => array('PointEvent.points'),
		));
		$points = $this->field('points', array('User.id' => $this->data['Point']['user_id']));
		$data['User']['points'] = $points + $pointEvent['PointEvent']['points'];
		
		// Update the user's Rank
		$data['User']['rank_id'] = $this->Rank->field('id', array('Rank.points >=' => $points));
		
		// Save updates
		$this->User->id = $this->data['Point']['user_id'];
		$this->User->save($data);			
	}
}
?>