<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components = array('Welcome.Membership', 'SwiftMailer');
	var $helpers = array('Age');
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny(array('password'));
	}

	function login() {
	}

	function logout() {
		$this->Auth->logout();
		$this->Session->setFlash('You have succesfully logged out.');
		$this->redirect(array('action' => 'login'));
	}

	function password() {
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Your password has been updated');
				$this->redirect(array('action' => 'settings'));
			} else {
				$this->Membership->resetPasswords();
				$this->Session->setFlash('Your password could not be updated');
			}
		}
	}

	//Send reset password confirmation
	function reset() {
		if (!empty($this->data)) {
			if($this->User->find('count', array('conditions' => array('User.email' => $this->data['User']['email']))) == 1) {
				$this->data = $this->User->find(array('User.email' => $this->data['User']['email']));
				$this->set('name', $this->data['User']['username']);
				$this->set('forgot_code', $this->data['User']['username'] . '/' .
					Security::hash(date('Ymd') . $this->data['User']['username'], null, true));
				$this->__sendPassMail($this->data['User']['email']);
				$this->Session->setFlash('Instructions has been sent to the email you have provided');
				$this->data['User']['email'] = null;
			} else {
				$this->Session->setFlash('The email you have provided has not been found. Try again.');
			}
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
		$this->User->recursive = 2;
		$this->set('user', $this->User->read(null, $id));
		$this->helpers[] = 'Time';
		$this->helpers[] = 'UploadPack.Upload';
	}

	function register() {
		if (!empty($this->data)) {
			$this->User->create();
			if($this->data['User']['password'] == Security::hash($this->data['User']['confirm_password'], null, true)) {
				if ($this->User->save($this->data)) {
					$this->Session->setFlash(__('Thank you for registering', true));
					$this->Auth->login($this->data);
					$this->redirect(array('action' => '/'));
				} else {
					$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
					$this->data['User']['password'] =$this->data['User']['confirm_password'];
				}
			} else {
				$this->Session->setFlash('Passwords do not match');
				$this->data['User']['password'] = null;
				$this->data['User']['confirm_password'] = null;
			}
		}
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
	}

	function delete() {
		if (!empty($this->data) && $this->data['confirm'] == 'Yes') {
			$this->User->delete($this->Auth->user('id'));
			$this->Session->setFlash('Your account was closed');
			$this->Auth->logout();
			$this->redirect('/');
		} elseif (!empty($this->data) && $this->data['confirm'] == 'No') {
			$this->Session->setFlash('You made the right decision...');
			$this->redirect(array('action' => 'settings'));
		}
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
		$this->User->recursive = 0;
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_set($id = null, $flag = null, $value = null) {
		if (!$id || !$flag || !$value) {
			$this->Session->setFlash('Invalid flag');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->User->read(null, $id)) {
			$this->User->set($flag, $value);
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('The user\'s ' . $flag . ' was set to ' . $value);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('There was an error trying to flag the user');
				$this->redirect(array('action' => 'index'));
			}
		} else {
				$this->Session->setFlash('The user could not be found');
				$this->redirect(array('action' => 'index'));
		}
	}

	/*function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		$roles = $this->User->roles;
		$this->set(compact('roles'));
	}*/

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
		$roles = $this->User->roles;
		$this->set(compact('roles'));
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
		} catch(Exception $e) {
  			$this->log("Failed to send email: ".$e->getMessage());
		}
	}

}
?>

