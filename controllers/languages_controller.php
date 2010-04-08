<?php
class LanguagesController extends AppController {

	var $name = 'Languages';

	function admin_index() {
		$this->Language->recursive = 0;
		$this->set('languages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'language'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('language', $this->Language->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Language->create();
			if ($this->Language->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'language'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'language'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'language'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Language->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'language'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'language'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Language->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'language'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Language->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Language'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Language'));
		$this->redirect(array('action' => 'index'));
	}
}
?>