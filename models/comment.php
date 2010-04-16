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
		// Make sure the review is open before commenting
		//@TODO Fix this stupid check. needs to check a field of a table of a table
		//if ($this->Source->Review->field('closed', array('Review.id = Source.id' => $this->data['Comment']['source_id'])) == true)
			//return false;
			
		$this->owner();
		return true;
	}
}
?>