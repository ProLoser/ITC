<?php
class Comment extends AppModel {
	var $name = 'Comment';
	var $order = 'Comment.created DESC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'line_start' => array(
			'numeric' => array(
				'rule' => 'numeric', 
				'message' => 'Numbers only',
			),
		),
		'line_end' => array(
			'numeric' => array(
				'rule' => 'numeric', 
				'message' => 'Numbers only',
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Contet cannot be blank.'
			)
		),
	);
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'source_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Vote' => array(
			'className' => 'Vote',
			'foreignKey' => 'comment_id',
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
	
	function beforeSave() {
		$this->owner();
		return true;
	}
	
	function afterSave($created) {
		if ($created) {
			$this->User->grantPoints('create-comment', $this->data['Comment']['user_id'], $this->data['Comment']['id']);
		} else {
			if (isset($this->data['Comment']['owner_vote'])) {
				if (!isset($this->data['Comment']['owner_vote'])) {
					$userId = $this->field('user_id', array('Comment.id' => $this->data['Comment']['id']));
				} else {
					$userId = $this->data['Comment']['owner_vote'];
				}
				$this->User->grantPoints('owner-comment-up', $userId, $this->data['Comment']['id']);
			}
		}
	}
}
?>