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
		'Subscriber' => array(
			'className' => 'Subscription',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Subscription.foreign_model' => 'Review'),
		),
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
		),
		'Language',
	);
	
	function beforeSave() {
		$this->data['Review']['user_id'] = User::get('id');
		return true;
	}
	
	function afterSave($created) {
		if (isset($this->data['Source'])) {
			foreach ($this->data['Source'] as $source) {
				$source['review_id'] = $this->id;
				$this->Source->save($source);
			}
		}
		if ($created) {
			$this->User->grantPoints('create-review', $this->data['Review']['user_id'], $this->id);
		}
	}

}
?>