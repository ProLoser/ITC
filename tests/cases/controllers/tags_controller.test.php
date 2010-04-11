<?php
/* Tags Test cases generated on: 2010-04-05 03:04:40 : 1270462360*/
App::import('Controller', 'Tags');

class TestTagsController extends TagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.review', 'app.reviews_tag');

	function startTest() {
		$this->Tags =& new TestTagsController();
		$this->Tags->constructClasses();
	}

	function endTest() {
		unset($this->Tags);
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