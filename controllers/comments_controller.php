<?php
class CommentsController extends AppController {

	var $name = 'Comments';

	/**
	 *
	 */
	function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

	/**
	 *
	 */
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'comment'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	/**
	 *
	 */
	function add($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'review'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'comment'));
				$this->redirect(array('controller' => 'sources', 'action' => 'view', $this->data['Comment']['source_id']));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'comment'));
			}
		}
		$users = $this->Comment->User->find('list');
		$files = $this->Comment->File->find('list');
		$this->set(compact('users', 'files'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'comment'));
			$this->redirect(array('action' => 'index'));
		} elseif ($id && !$this->_owner($id)) {
			$this->Session->setFlash(sprintf(__('You don\'t own this %s', true), 'comment'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'comment'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'comment'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		$users = $this->Comment->User->find('list');
		$files = $this->Comment->File->find('list');
		$this->set(compact('users', 'files'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'comment'));
			$this->redirect(array('action'=>'index'));
		} elseif (!$this->_owner($id)) {
			$this->Session->setFlash(sprintf(__('You don\'t own this %s', true), 'comment'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Comment'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Comment'));
		$this->redirect(array('action' => 'index'));
	}
}
?>

