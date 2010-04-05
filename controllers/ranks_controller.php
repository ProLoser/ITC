<?php
class RanksController extends AppController {

	var $name = 'Ranks';

	function index() {
		$this->Rank->recursive = 0;
		$this->set('ranks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'rank'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rank', $this->Rank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rank->create();
			if ($this->Rank->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'rank'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'rank'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'rank'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rank->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'rank'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'rank'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'rank'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Rank->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Rank'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Rank'));
		$this->redirect(array('action' => 'index'));
	}
}
?>