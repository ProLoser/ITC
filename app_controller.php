<?php
class AppController extends Controller {
	
	var $components = array(
		'Auth', 
		'Session',
	);
	
	function beforeFilter() {
		$this->__configureAuth();
		// Configure System Permission
		if ($this->_prefix() && $this->Auth->user('id') !== 0) {
			$this->Session->setFlash('You must be a system administrator');
			$this->redirect('/');
		}
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
		$this->Auth->allow();
		if ($this->_prefix('admin') || $this->_prefix('system')) {
			$this->Auth->deny();
		} else {			
			$this->Auth->deny(array('add', 'edit', 'delete'));
		}

		$this->Auth->fields = array('username' => 'username', 'password' => 'password');
		$this->Auth->loginAction = array('plugin' => null, 'admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = '/';
	}
}
?>