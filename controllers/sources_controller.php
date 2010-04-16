<?php
class SourcesController extends AppController {

	var $name = 'Sources';
	var $helpers = array('Geshi.Geshi');

	function index() {
		$this->Source->recursive = 0;
		$this->set('sources', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'source'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('source', $this->Source->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Source->create();
			if ($this->Source->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'source'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'source'));
			}
		}
		$reviews = $this->Source->Review->find('list');
		$this->set(compact('reviews'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'source'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Source->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'source'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'source'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Source->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'source'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Source->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Source'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Source'));
		$this->redirect(array('action' => 'index'));
	}
}
?>

