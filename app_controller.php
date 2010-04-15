<?php
class AppController extends Controller {
	
	var $components = array(
		'Auth', 
		'Session',
	);
	
	var $helpers = array(
		'UploadPack.Upload',
		'Session',
		'Form'
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