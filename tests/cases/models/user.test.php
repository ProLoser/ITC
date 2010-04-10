<?php
/* User Test cases generated on: 2010-04-05 03:04:12 : 1270462332*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.rank', 'app.comment', 'app.point', 'app.review', 'app.subscription', 'app.vote');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>