<?php
class SubscriptionsController extends AppController {

	var $name = 'Subscriptions';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny(array('index', 'view'));
	}

	function index() {
		$this->Subscription->recursive = 0;
		$this->paginate['conditions']['Subscription.user_id'] = $this->Auth->user('id');
		$this->set('subscriptions', $this->paginate());
	}

	
	function view($reviewId = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'subscription'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscription', $this->Subscription->read(null, $id));
	}

	function add($model = null, $id = null) {
		if (!$id || !$model) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'model'));
			$this->redirect(array('action' => 'index'));
		} else {
			if ($this->Subscription->subscribe($model, $id)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'subscription'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscription'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'subscription'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscription->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'subscription'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscription'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscription->read(null, $id);
		}
	}

	function delete($model = null, $id = null) {
		if (!$id || !$model) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'model'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subscription->deleteAll(array(
			'Subscription.user_id' => $this->Auth->user('id'),
			'Subscription.foreign_model' => $model,
			'Subscription.foreign_id' => $id,
		))) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Subscription'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Subscription'));
		$this->redirect(array('action' => 'index'));
	}

}
?>