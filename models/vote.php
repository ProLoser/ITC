<?php
class Vote extends AppModel {
	var $name = 'Vote';
	var $order = 'Vote.created DESC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'comment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function beforeSave() {
		$this->owner();
		return true;
	}
	
	function afterSave($created) {
		if ($created) {
			if ($this->data['direction']) {
				$event = 'vote-comment-up';
			} else {
				$event = 'vote-comment-down';
			}
			$userId = $this->User->Comment->field('user_id', array('Comment.id' => $this->data['Vote']['comment_id']));
			$this->User->grantPoints($event, $userId, $this->id);
		} else {
			
		}
	}
}
?>