<?php
/* Subscriptions Test cases generated on: 2010-04-05 03:04:03 : 1270463043*/
App::import('Controller', 'Subscriptions');

class TestSubscriptionsController extends SubscriptionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubscriptionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription', 'app.user', 'app.rank', 'app.comment', 'app.source', 'app.review', 'app.tag', 'app.reviews_tag', 'app.language', 'app.vote', 'app.point', 'app.point_event');

	function startTest() {
		$this->Subscriptions =& new TestSubscriptionsController();
		$this->Subscriptions->constructClasses();
	}

	function endTest() {
		unset($this->Subscriptions);
		ClassRegistry::flush();
	}

}
?>