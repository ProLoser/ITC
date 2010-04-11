<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'username'   => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'message' => 'Alpha-numeric names only."'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Username already taken. Try again.'
			)
		),
			
		'password' => array(
			'rule' => array('minLength', 6),
			'allowEmpty' => false,
			'message' => 'Password must be at the minimum 6 characters long.'
		),
		
		'confirm_password' => array(
			'rule' => array('minLength', 6),
			'allowEmpty' => false,
			'message' => 'Password must be at the minimum 6 characters long.'
		),
		
		'email' => array(
			'emailValid' => array(
				'rule' => 'email', 
				'message' => 'Invalid e-mail.',
				'allowEmpty' => false
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Email already in use. Try again.'
			)
		),
		
		'date_of_birth' => array(
			'rule' => 'date',
			'message' => 'Enter a valid date',
			'allowEmpty' => false
		),
		
		'role' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Rank' => array(
			'className' => 'Rank',
			'foreignKey' => 'rank_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Point' => array(
			'className' => 'Point',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Review' => array(
			'className' => 'Review',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Subscription' => array(
			'className' => 'Subscription',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Vote' => array(
			'className' => 'Vote',
			'foreignKey' => 'user_id',
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

	function grantPoints($event, $userId) {
		//@TODO Should point event use the key as the primary key?
		$data['Point']['user_id'] = $userId;
		$data['Point']['point_event_id'] = $event;
		return $this->Point->save($data);
	}
	
	function beforeSave() {
		// Sets the default rank if creating a new user
		if (!isset($this->data['User']['id']) && !isset($this->data['User']['rank_id'])) {
			$this->data['User']['rank_id'] = $this->Rank->field('id'); // rank order by points asc
		}
		return true;
	}
	
}
?>