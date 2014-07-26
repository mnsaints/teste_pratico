<?php

	class User extends AppModel {
		public $name = 'User';
		
		public $validate = array(
			'username' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Preencha o nome.'
				)
			)
			,
			'userlogin' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Preencha o login.'
				)
			),
			'userpass' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Preencha a senha.'
				)
			)
		);
	}

?>