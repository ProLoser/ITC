<?php
class AppController extends Controller {

	var $components = array(
		'Auth',
		'Session',
		'DebugKit.Toolbar'
	);

	var $helpers = array(
		'UploadPack.Upload',
		'Session',
		'Form',
		'Text',
		'Time'
	);

	function beforeFilter() {
		$this->__configureAuth();
		App::import('Model', 'User');
		User::store($this->Auth->user());
	}

	function beforeRender() {
		// Configure Layout
		if ($this->_prefix()) {
			$this->layout = 'admin';
		}

		// Load common layout variables
		$this->loadModel('User');
		$popUsers = $this->User->find('list', array('limit' => 10));
		$reviewCount = $this->User->Review->find('count');
		$this->set(compact('popUsers', 'reviewCount'));
	}

	/**
	 * Checks to see if the current user is the owner of the record and sets a boolean variable to the view
	 * 
	 * @param $id int id of the current record to check ownership for
	 */
	function _owner($id) {
		if ($this->Auth->user('id') == $this->{$this->modelClass}->field($this->modelClass.'.user_id', array($this->modelClass.'.id' => $id))) {
			$this->set('owner', true);
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Checks to see if the current user is a subscriber and sends subscription info to the view
	 * Can be used in conjunction with the 'subscribe.ctp' element
	 * 
	 * @param $id int id of the current record to check a subscription for
	 */
	function _subscriber($id) {
		$results = $this->{$this->modelClass}->Subscriber->find('first',
			array('conditions' => array(
				'foreign_model' => $this->modelClass,
				'foreign_id' => $id,
				'user_id' => $this->Auth->user('id')
			))
		);
		$this->set('subscriber', $results);
		return $results;
	}

	/**
	 * Checks to see what the current prefix in use is. Checks for 'admin' by
	 * default.
	 *
	 * @return boolean
	 * @access protected
	 **/
	function _prefix($prefix = 'admin') {
		if (isset($this->params['prefix']) && $this->params['prefix'] == $prefix) {
			return true;
		}
		return false;
	}

	/**
	 * Configures the AuthComponent according to the application's settings
	 *
	 * @return void
	 * @access private
	 */
	function __configureAuth() {
		$this->Auth->fields = array('username' => 'username', 'password' => 'password');
		$this->Auth->loginAction = array('plugin' => null, 'admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = '/';

		if ($this->_prefix()) {
			$this->Auth->deny();
			if ($this->Auth->user('role') != 'Admin') {
				$this->Session->setFlash('You must be an Admin to access this area');
				$this->redirect($this->Auth->loginAction);
			}
		} else {
			$this->Auth->allow();
			$this->Auth->deny(array('add', 'edit', 'delete'));
		}
	}
}
?>

