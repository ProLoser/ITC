<?php
class Tag extends AppModel {
	var $name = 'Tag';
	var $order = 'Tag.name ASC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'name'   => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'message' => 'Alpha-numeric names only."'
			)
		)
	);
	var $hasAndBelongsToMany = array(
		'Review' => array(
			'className' => 'Review',
			'joinTable' => 'reviews_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'review_id',
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

}
?>