<?php
class PointEventsController extends AppController {

	var $name = 'PointEvents';

	function index() {
		$this->PointEvent->recursive = 0;
		$this->set('pointEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'point event'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pointEvent', $this->PointEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PointEvent->create();
			if ($this->PointEvent->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'point event'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'point event'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'point event'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PointEvent->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'point event'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'point event'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PointEvent->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'point event'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PointEvent->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Point event'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Point event'));
		$this->redirect(array('action' => 'index'));
	}
}
?>