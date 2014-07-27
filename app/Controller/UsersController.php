<?php

class UsersController extends AppController {


   

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário Inválido'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuário cadastrado.'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Ocorreu um erro ao cadastrar usuário.'));
            }
        }
    }

    
	

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

	public function login() {
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			if ($this->request->is('post')) {
				$this->Session->setFlash(__('Usuário ou senha inválidos.'));
			}	
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	
	
}
?>