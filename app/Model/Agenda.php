<?php

	class Agenda extends AppModel {
		public $name = 'Agenda';
		public $validate = array(
   
   
  		  'date_event' => array(
				'allowEmpty' => array(
					'rule' => array('notEmpty'),
					'message' => 'Informe uma data.'
				)
			),
			'title' => array(
				'allowEmpty' => array(
					'rule' => array('notEmpty'),
					'message' => 'Informe seu nome.'
				)
			),
			'description' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Informe o nome do usuário'
				)
			)
			
		);
			
		
	}

?>