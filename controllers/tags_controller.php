<?php
class TagsController extends AppController {

	var $name = 'Tags';

	function index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tag'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tag->create();
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'tag'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'tag'));
			}
		}
		$reviews = $this->Tag->Review->find('list');
		$this->set(compact('reviews'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tag'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'tag'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'tag'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tag->read(null, $id);
		}
		$reviews = $this->Tag->Review->find('list');
		$this->set(compact('reviews'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tag'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tag->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Tag'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tag'));
		$this->redirect(array('action' => 'index'));
	}
}
?>