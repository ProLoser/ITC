<?php
class User extends AppModel {
	var $name = 'User';
	var $order = 'User.points DESC';
	var $displayField = 'username';
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
		'email' => array(
			'email' => array(
				'rule' => 'email', 
				'message' => 'Invalid e-mail.',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Email already in use. Try again.'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Email cannot be blank.'
			)
		),
		'date_of_birth' => array(
			'rule' => 'date',
			'message' => 'Enter a valid date',
		),
		'role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'points' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Please numbers only.'
			),
			'range' => array(
				'rule' => array('range', -2147483648, 2147483647),
				'message' => 'Out of range.'
			),
		)
	);
	
	var $roles = array(
		'User' => 'User',
		'Admin' => 'Admin',
	);

	var $belongsTo = array(
		'Rank'
	);

	var $hasMany = array(
		'Comment',
		'Point',
		'Review',
		'Subscription',
		'Subscriber' => array(
			'className' => 'Subscription',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Subscription.foreign_model' => 'User'),
		),
		'Vote'
	);

	var $actsAs = array(
		'UploadPack.Upload' => array(
			'avatar' => array(
				'styles' => array(
					'small' => '40x40',
					'medium' => '120x120',
				)
			)
		),
		'Welcome.Membership',
	);
	
	function afterSave($created) {
		if ($created) {
			$this->grantPoints('user-register', $this->id);
		}
	}
	
	
	/**
	 * Used for global authenticated user access
	 */
	function &getInstance($user=null) {
		static $instance = array();
		if ($user) {
			$instance[0] =& $user;
		}
		if (!$instance) {
			trigger_error(__("User not set.", true), E_USER_WARNING);
			return false;
		}
		return $instance[0];
	}
	
	function store($user) {
		if(empty($user)){
			return false;
		}
		User::getInstance($user);
	}
	
	function get($path) {
		$_user =& User::getInstance();
		$path = str_replace('.', '/', $path);
		if (strpos($path, 'User') !== 0) {
			$path = sprintf('User/%s', $path);
		}
		if (strpos($path, '/') !== 0) {
			$path = sprintf('/%s', $path);
		}
		$value = Set::extract($path, $_user);
		if (!$value) {
			return false;
		}
		return $value[0];
	}
	
	/**
	 * Function for granting a user points via a point event
	 * Requires that you pass a string id key for the point event and the target user's id. Foreign_id optional
	 *
	 * @param $event string The PointEvent.id key that the user is being given points for
	 * @param $userId int The currently logged-in user's id to be associated with the record
	 * @param $foreignId int The primary id of the related model-record that earned the points
	 */
	function grantPoints($event, $userId, $foreignId = null) {
		//@TODO Should point event use the key as the primary key?
		$data['Point']['user_id'] = $userId;
		$data['Point']['point_event_id'] = $event;
		if ($foreignId)
			$data['Point']['foreign_id'] = $foreignId;
		return $this->Point->save($data);
	}
	
}
?>