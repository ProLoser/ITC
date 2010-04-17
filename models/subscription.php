<?php
class Subscription extends AppModel {
	var $name = 'Subscription';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Review' => array(
			'className' => 'Review',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Subscription.foreign_model' => 'Review'),
		),
		'Subscribee' => array(
			'className' => 'User',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Subscription.foreign_model' => 'User'),
		),
	);
	
	var $foreignModels = array(
		'User',
		'Review',
	);
	
	/**
	 * Call this method to subscribe the current user to a foreign model/id
	 */
	function subscribe($model, $foreignId) {
		if (in_array($model, $this->foreignModels)) {
			$data['Subscription'] = array(
				'foreign_model' => $model,
				'foreign_id' => $foreignId,
			);
			
			if ($model == 'Review' && $this->User->Review->field('visibility', array('Review.id' => $foreignId)) == 'Hidden') {
				$data['Subscription']['pending'] =  true;
			}
			
			return $this->save($data);
		} else {
			return false;
		}
	}
	
	function beforeSave() {
		$this->owner();
		return true;
	}
	
	function afterSave($created) {
		if ($created) {
			if ($this->data['Subscription']['foreign_id'] == 'User') {
				$this->grantPoints(
					'user-subscribed',
					$this->data['Subscription']['foreign_id']
				);
			} else {
			
			}
		}
	}
}
?>