<?php
class PointsController extends AppController {

	var $name = 'Points';

	function index() {
		$this->Point->recursive = 0;
		$this->set('points', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'point'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('point', $this->Point->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Point->create();
			if ($this->Point->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'point'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'point'));
			}
		}
		$users = $this->Point->User->find('list');
		$pointEvents = $this->Point->PointEvent->find('list');
		$this->set(compact('users', 'pointEvents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'point'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Point->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'point'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'point'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Point->read(null, $id);
		}
		$users = $this->Point->User->find('list');
		$pointEvents = $this->Point->PointEvent->find('list');
		$this->set(compact('users', 'pointEvents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'point'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Point->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Point'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Point'));
		$this->redirect(array('action' => 'index'));
	}
}
?>