<?php
/**
 * $model required: 'User' or 'Review'
 * $id required: model_id
 */
if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.id') != $id) {
	echo $this->Html->link(
		__('Subscribe', true), 
		array('controller' => 'subscriptions', 'action' => 'add', $model, $id), 
		array('class' => 'subscribe')
	);
} elseif (isset($subscriber) && !empty($subscriber)) {
	echo $this->Html->link(
		__('Unsubscribe', true), 
		array('controller' => 'subscriptions', 'action' => 'delete', $subscription['Subscription']['id']), 
		array('class' => 'unsubscribe')
	);
}
?>