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
		}
		
		public function add() {
			
			if ($this->request->is('post')) {
			echo $this->Auth->user('id');
			$this->request->data['Agenda']['user_id'] = $this->Auth->user('id');
			$this->request->data['Agenda']['date_event'] = date("Y-m-d",strtotime($this->request->data['Agenda']['date_event']));
				if ($this->Agenda->save($this->request->data)) {
					$this->Session->setFlash(__('Atividade cadastrada.'), 'default',   array('class' => 'alert alert-success'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Erro ao cadastrar novo evento.'),  'default',   array('class' => 'alert alert-danger'));
				}
				
			}			
			
		}
		
		function delete($id) {
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			if ($this->Agenda->delete($id)) {
				$msg   = 'Atividade excluída.';
				$status =  TRUE;
			} else {
				$msg = 'Ocorreu um erro ao excluir a atividade.';
				$status =  FALSE;				
			}
			
			if($this->RequestHandler->isAjax()) {
				$this->autoRender = $this->layout = false;
				echo json_encode(array('success'=> $status, 'msg' => $msg ) );
				exit;
			}
		}
		
		public function order() {
			
			if ($this->request->is('post')) {
				$order = $this->request->data['action'];
				$mode = $this->request->data['mode'];
				
				if ($mode == 'date'){
					
					$options['order'] = array(
						'Agenda.date_event '.$order);		
					
				}else{
					
					$options['order'] = array(
						'Agenda.title '.$order);		
					$output="";
				
				}
				
				$agendas = $this->Agenda->find('all', $options);
				$output="";
				foreach ($agendas as $agenda): 
						$output .= "<tr>";
						$output .= "<td>".date('d/m/Y', strtotime($agenda['Agenda']['date_event']))."</td> ";
						$output .= "<td>".$agenda['Agenda']['title']."</td>";
						$output .= "<td>".$agenda['Agenda']['description']."</td>";
						$output .= "<td><a href=\"/cakephp/agendas/delete/".$agenda['Agenda']['id']."\" class=\"confirm_delete\">excluir</a></td>";
						$output .= "</tr>";	         
				 endforeach; 
				
				if($this->RequestHandler->isAjax()) {
					$this->autoRender = $this->layout = false;
					echo $output ;
				exit;
			}
				
			}			
			
		}
		
		
		
		
		
	}
	
	
	
	
?>