<?php

	class AgendasController extends AppController {
	
		public $helpers = array ('Html','Form', 'Js' => array('Jquery'));
		public $name = 'Agendas';
		var $components = array('Session', 'RequestHandler');
		
		function index() {
		
			$options['conditions'] = array(
				'Agenda.user_id' => $this->Auth->user('id')
			);		
			$this->set('agendas', $this->Agenda->find('all', $options));
			echo $this->Auth->user('id');
		}
		
		public function add() {
			
			if ($this->request->is('post')) {
			echo $this->Auth->user('id');
			$this->request->data['Agenda']['user_id'] = $this->Auth->user('id'); 
				//$this->Agenda->create();
				
				if ($this->Agenda->save($this->request->data)) {
					$this->Session->setFlash(__('Evento cadastrado.'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Erro ao cadastrar novo evento.'));
				}
				
			}			
			
		}
		
		function delete($id) {
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			if ($this->Agenda->delete($id)) {
			
				$class = 'flash_good';
				$msg   = 'A Atividade foi excluída.';
				

			} else {
				$msg = 'Ocorreu um erro ao excluir a atividade.';
			}
			
			if($this->RequestHandler->isAjax()) {
				$this->autoRender = $this->layout = false;
				echo json_encode(array('success'=>($class=='flash_bad') ? FALSE : TRUE,'msg'=>"<p id='flashMessage' class='{$class}'>{$msg}</p>"));
				exit;
			}
		}
	}
	
	
	
	
?>