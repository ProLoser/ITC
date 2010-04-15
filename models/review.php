<?php
class Review extends AppModel {
	var $name = 'Review';
	var $order = 'Review.created DESC';
	var $validate = array(
		'name' => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric', 
				'message' => 'Alpha-numeric characters only.',
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a name.'
			)
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a description.'
			)
		),
	);
	// Used for populating the droplist on the form
	var $visibilities = array(
		'Public' => 'Public',
		'Private' => 'Private',
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'review_id',
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


	var $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'reviews_tags',
			'foreignKey' => 'review_id',
			'associationForeignKey' => 'tag_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
	function afterSave($created) {
		if ($created) {
			$this->User->grantPoints('create-review', $this->data['Review']['user_id'], $this->id);
		}
	}

}
?>