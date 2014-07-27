<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $name = 'User';
    public $validate = array(	
	
        'name' => array(
            'required' => array(
			    'rule' => array('notEmpty'),
                'message' => 'Informe o seu nome.',
                'allowEmpty' => false
            )
        ),
       'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Informe um nome de usuário',
				'allowEmpty' => false
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Informe uma senha.',
				'allowEmpty' => false
            )
        ),
    );
	
	
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}
?>