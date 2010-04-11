<?php
/* Votes Test cases generated on: 2010-04-05 03:04:31 : 1270462351*/
App::import('Controller', 'Votes');

class TestVotesController extends VotesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VotesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vote', 'app.comment', 'app.user', 'app.rank', 'app.point', 'app.review', 'app.subscription');

	function startTest() {
		$this->Votes =& new TestVotesController();
		$this->Votes->constructClasses();
	}

	function endTest() {
		unset($this->Votes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>