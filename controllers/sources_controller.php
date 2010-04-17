<?php
class SourcesController extends AppController {

	var $name = 'Sources';
	var $helpers = array('Geshi', 'Html', 'Javascript');

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'source'));
			$this->redirect(array('controller' => 'reviews', 'action' => 'index'));
		}
		$source = $this->Source->find('first', array(
			'conditions' => array('Source.id' => $id),
			'contain'=>array(
				'Review',
				'Comment' => array(
					'User' => array(
						'fields' => array('id', 'username', 'avatar_file_name'),
						'Rank' => array(
							'fields' => array('id', 'title')
						)
					)
				),
				'Language' => array(
					'fields' => array('id', 'key')
				)
			)
		));
		$this->_owner($source['Source']['review_id'], 'Review');
		$this->set(compact('source'));
	}

	function add($reviewId = null) {
		if (!$reviewId && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'review'));
			$this->redirect(array('controller' => 'reviews', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->Source->create();
			if ($this->Source->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'source'));
				$this->redirect(array('controller' => 'reviews', 'action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'source'));
			}
		}
		if ($reviewId) {
			$this->data['Source']['review_id'] = $reviewId;
		}
		$languages = $this->Source->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'source'));
			$this->redirect(array('action' => 'mine'));
		}
		if (!empty($this->data)) {
			if ($this->Source->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'source'));
				$this->redirect(array('controller' => 'reviews', 'action' => 'mine'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'source'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Source->read(null, $id);
		}
		$languages = $this->Source->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'source'));
			$this->redirect(array('controller' => 'reviews', 'action'=>'mine'));
		}
		if ($this->Source->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Source'));
			$this->redirect(array('controller' => 'reviews', 'action'=>'mine'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Source'));
		$this->redirect(array('controller' => 'reviews', 'action' => 'mine'));
	}
}
?>

