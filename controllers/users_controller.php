<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components = array('Welcome.Membership', 'SwiftMailer');
	function beforeFilter() {
		$this->Auth->allow('register', 'confirm', 'logout');
        $this->Auth->autoRedirect = false;
	}
	function beforeSave() {
	return true;
	}
	function login() {
	}
	
	function logout() {
	}
	function password() {
		if (!empty($this->data))
		{
			
		}
		else
		{
			
		}
	}
	function add() {
	}
	//Forgot password form
	function fPass($username, $forgotCode)
	{
		if($forgotCode == Security::hash(date('Ymd') . $username, null, true))
		{
			if(!empty($this->data))
			{
				if($this->data['User']['password'] == $this->data['User']['confirm_password']){
					$this->data['User']['password'] = '\'' . Security::hash($username . $this->data['User']['password'], null, true) . '\''; //BUG, needs explicit quotations or it will generate an SQL error.
					if($this->User->updateAll(array('User.password' => $this->data['User']['password']), array('User.username' => $username)))
					{
						$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
						$this->redirect(array('action' => 'index'));
					}
					else 
					{
						$this->Session->setFlash('Unable to update password.');
					}
				}
				else
				{
					$this->Session->setFlash('Invalid. Try again');
				}
			}
		}
		else
		{
			$this->Session->setFlash('Link has expired, please request another password link');
			$this->redirect(array('controller' => 'users', 'action' => 'index'));
		}
			
	}
	//Send reset password confirmation
	function reset() {
		if (!empty($this->data))
		{
			if($this->User->find('count', array('conditions' => array('User.email' => $this->data['User']['email']))) == 1)
			{
				$this->data = $this->User->find(array('User.email' => $this->data['User']['email']));
				$this->set('name', $this->data['User']['username']);
				$this->set('forgot_code', $this->data['User']['username'] . '/' .
					Security::hash(date('Ymd') . $this->data['User']['username'], null, true));
				$this->__sendPassMail($this->data['User']['email']);
				$this->Session->setFlash('Instructions has been sent to the email you have provided');
				$this->data['User']['email'] = null;
			}
			else
			{
				$this->Session->setFlash('The email you have provided has not been found. Try again.');
			}
		}

		
	}
	function __sendPassMail($email) {
		$this->SwiftMailer->smtpType = 'tls';
		$this->SwiftMailer->smtpHost = 'smtp.gmail.com';
		$this->SwiftMailer->smtpPort = 465;
		$this->SwiftMailer->smtpUsername = 'itccompetition@gmail.com';
		$this->SwiftMailer->smtpPassword = 'competition';

		$this->SwiftMailer->sendAs = 'html';
		$this->SwiftMailer->from = 'itccompetition@gmail.com';
		$this->SwiftMailer->fromName = 'ProCode';
		$this->SwiftMailer->to = $email;
		try {
			if(!$this->SwiftMailer->send('user_forgot', 'Reset Password')) {
				$this->log("Error sending email");
			}
		}
		catch(Exception $e) {
  			$this->log("Failed to send email: ".$e->getMessage());
		}
	}
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function register() {
		if (!empty($this->data)) {
			$this->User->create();
			if($this->data['User']['password'] == Security::hash($this->data['User']['confirm_password'], null, true)) {
				if ($this->User->save($this->data)) {
					$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
					$this->data['User']['password'] =$this->data['User']['confirm_password'];
				}
			}
			else
			{
				$this->Session->setFlash('Passwords do not match');
				$this->data['User']['password'] = null;
				$this->data['User']['confirm_password'] = null;
			}
		}
		$ranks = $this->User->Rank->find('list');
		$this->set(compact('ranks'));
	}

	function settings() {
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $this->Auth->user('id'));
		}
		$ranks = $this->User->Rank->find('list');
		$this->set(compact('ranks'));
	}

	function delete() {
		if ($this->User->delete($this->Auth->user('id'))) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'User'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'User'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		$ranks = $this->User->Rank->find('list');
		$this->set(compact('ranks'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$ranks = $this->User->Rank->find('list');
		$this->set(compact('ranks'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'user'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'User'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'User'));
		$this->redirect(array('action' => 'index'));
	}
}
?>