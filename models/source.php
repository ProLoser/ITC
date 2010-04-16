<?php
class Source extends AppModel {
	var $name = 'Source';
	var $order = 'Source.source_file_name ASC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Review' => array(
			'className' => 'Review',
			'foreignKey' => 'review_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'source_id',
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

	var $actsAs = array(
		/*'UploadPack.Upload' => array(
			'source_file_name' => array(
			)
		),*/
		'Revision',
	);

	// Stores the content of the uploaded file into the blob field.
	function beforeSave() {
		if ($this->data['Source']['file']) {
			// @TODO Need to do the CakePHP approach to file management (see the file class)
			$file = new File($this->data['Source']['file']['tmp_name']);
			$this->data['Source']['content'] = $file->read();
			$this->data['Source']['filename'] = $this->data['Source']['file']['name'];
			$this->data['Source']['size'] = $this->data['Source']['file']['size'];
		}

		return true;
	}

}
?>

