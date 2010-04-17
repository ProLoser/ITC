<?php
class VotesController extends AppController {

	var $name = 'Votes';

	function add($foreignId = null, $direction = 'up', $model = null) {
		if (!$model && !$foreignId && !$direction) {
			$this->Vote->create();
			if ($model == 'Comment') {
				$data['Vote']['comment_id'] = $foreignId;
			} else {
				$data['Vote']['foreign_id'] = $foreignId;
			}
			
			$data['Vote']['direction'] = ($direction == 'up') ? true : false;
			
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'vote'));
				$this->redirect('/');
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'vote'));
				$this->redirect('/');
			}
		} else {
			$this->Session->setFlash(sprintf(__('The %s could not be saved', true), 'vote'));
			$this->redirect('/');
		}
	}
}
?>