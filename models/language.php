<?php
class Language extends AppModel {
	var $name = 'Language';
	var $order = 'Language.name ASC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a name.'
			)
		),
		'key' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a key.'
			)
		)
	);

	var $hasMany = array(
		'Source'
	);

}
?>