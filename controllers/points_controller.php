<?php
class PointsController extends AppController {

	var $name = 'Points';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny(array('index'));
	}

	function index() {
		$this->Point->recursive = 0;
		$this->paginate['conditions']['Point.user_id'] = $this->Auth->user('id');
		$this->set('points', $this->paginate());
	}
}
?>