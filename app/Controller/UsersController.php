<?php

	class UsersController extends AppController {
	
		public $helpers = array ('Html','Form');
		public $name = 'Users';
		public $components = array('Session');
		
		function index() {
			$this->set('users', $this->User->find('all'));
		}
		
		public function add() {
			
			if ($this->request->is('post')) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Usuário cadastrado.'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Erro ao cadastrar novo usuário.'));
				}
			}			
			
		}
	}
	
	
?>