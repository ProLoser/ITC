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
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Line start cannot be blank.'
			)
		),
		'line_end' => array(
			'numeric' => array(
				'rule' => 'numeric', 
				'message' => 'Numbers only',
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Line end cannot be blank.'
			)
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
}
?>