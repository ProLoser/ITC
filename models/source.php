<?php
class Source extends AppModel {
	var $name = 'Source';
	var $order = 'Source.modified DESC';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Review'
	);

	var $hasMany = array(
		'Comment'
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

