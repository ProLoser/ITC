<?php
/* Vote Test cases generated on: 2010-04-05 03:04:31 : 1270462351*/
App::import('Model', 'Vote');

class VoteTestCase extends CakeTestCase {
	var $fixtures = array('app.vote', 'app.comment', 'app.user', 'app.rank', 'app.point', 'app.review', 'app.subscription');

	function startTest() {
		$this->Vote =& ClassRegistry::init('Vote');
	}

	function endTest() {
		unset($this->Vote);
		ClassRegistry::flush();
	}

}
?>