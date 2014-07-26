<?php

	class AgendasController extends AppController {
	
		public $helpers = array ('Html','Form', 'Js' => array('Jquery'));
		public $name = 'Agendas';
		public $components = array('Session');
		
		function index() {
			$this->set('agendas', $this->Agenda->find('all'));
		}
		
		public function add() {
			
			if ($this->request->is('post')) {
				$this->Agenda->create();
				if ($this->Agenda->save($this->request->data)) {
					$this->Session->setFlash(__('Evento cadastrado.'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Erro ao cadastrar novo evento.'));
				}
				
			}			
			
		}
	}
	
	
?>