<?php
class Subscription extends AppModel {
	var $name = 'Subscription';
	var $order = 'created DESC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
	
	var $foreignModels = array(
		'User',
		'Review',
	);
	
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
}
?>