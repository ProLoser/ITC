<?php
class Language extends AppModel {
	var $name = 'Language';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Source' => array(
			'className' => 'Source',
			'foreignKey' => 'language_id',
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

}
?>