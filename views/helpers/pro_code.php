<?php
date_default_timezone_set('America/Los_Angeles'); 
class ProCodeHelper extends AppHelper {

	var $helpers = array('Session', 'Html');
	
	function calculateAge($birthday){ 
		return floor((time() - strtotime($birthday))/31556926);
	}
	
	/**
	 * $model required: 'User' or 'Review'
	 * $id required: model_id
	 */
	function subscribe($model, $id) {
		if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.id') != $id) {
			return $this->Html->link(
				__('Subscribe', true), 
				array('controller' => 'subscriptions', 'action' => 'add', $model, $id), 
				array('class' => 'subscribe')
			);
		} elseif (isset($subscriber) && !empty($subscriber)) {
			return $this->Html->link(
				__('Unsubscribe', true), 
				array('controller' => 'subscriptions', 'action' => 'delete', $subscription['Subscription']['id']), 
				array('class' => 'unsubscribe')
			);
		}
	}
	
	/**
	 * Generate thumbs up or down link
	 */
	function vote($model, $id, $direction = true) {
		return $this->Html->link(
			'Thumbs Up', 
			array('controller' => 'votes', 'action' => 'add', $model, $id, $direction), 
			array('class' => 'thumbsUp')
		);
	}
}
?>