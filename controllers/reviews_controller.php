<?php
class ReviewsController extends AppController {

	var $name = 'Reviews';
	
	public $components = array ('Filter.Filter');
	public $helpers = array ('Filter.Filter');

	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny(array('mine'));
	}

	function index() {
		$this->Review->recursive = 0;
		$this->paginate['conditions'] = array('Review.visibility' => 'Public');
		$this->set('reviews', $this->paginate());
	}
	
	function home() {
		$this->Review->recursive = 0;
		$this->paginate['conditions'] = array('Review.visibility' => 'Public');
		$this->set('reviews', $this->paginate());
	}
	
	function search() {
		$this->paginate = array_merge_recursive($this->paginate, $this->Filter->paginate);
		$reviews = $this->paginate();
		$this->set(compact('reviews'));
	}

	function mine() {
		$this->Review->recursive = 0;
		// This approach is only used for paginate(), not Model->find()
		$this->paginate['conditions']['Review.user_id'] = $this->Auth->user('id');
		$this->set('reviews', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'review'));
			$this->redirect(array('action' => 'index'));
		}
		$this->_owner($id);
		$this->_subscriber($id);
		$params['conditions']['Review.id'] = $id;
		$params['recursive'] = 1;
		$review = $this->Review->find('first', $params);
		$this->set(compact('review'));
	}

	function add($copies = 3) {
		if (!empty($this->data)) {
			$this->Review->create();
			if ($this->Review->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'review'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'review'));
			}
		}
		$visibilities = $this->Review->visibilities;
		$languages = $this->Review->Source->Language->find('list');
		$this->set(compact('visibilities', 'copies', 'languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'review'));
			$this->redirect(array('action' => 'index'));
		} elseif ($this->_owner($id)) {
			$this->Session->setFlash(sprintf(__('You aren\'t the owner of this %s', true), 'review'));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Review']['user_id'] = $this->Auth->user('id');
			if ($this->Review->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'review'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'review'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Review->read(null, $id);
		}
		$visibilities = $this->Review->visibilities;
		$this->set(compact('visibilities'));
	}

	/**
	 * Closes a review
	 */
	function close($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'review'));
			$this->redirect(array('action'=>'index'));
		} elseif ($this->_owner($id)) {
			$this->Session->setFlash(sprintf(__('You aren\'t the owner of this %s', true), 'review'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Review->saveField('closed', true)) {
			$this->Session->setFlash(sprintf(__('%s closed', true), 'Review'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not closed', true), 'Review'));
		$this->redirect(array('action' => 'index'));
	}
	
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'review'));
			$this->redirect(array('action'=>'index'));
		} elseif ($this->_owner($id)) {
			$this->Session->setFlash(sprintf(__('You aren\'t the owner of this %s', true), 'review'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Review->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Review'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Review'));
		$this->redirect(array('action' => 'index'));
	}
}
?>