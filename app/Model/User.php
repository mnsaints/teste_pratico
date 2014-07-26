<?php

	class User extends AppModel {
		public $name = 'User';
		
		public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        )
		,
        'userlogin' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A userlogin is required'
            )
        ),
        'userpass' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );
	}

?>