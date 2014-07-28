<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $name = 'User';
   public $validate = array(
   
   		'name' => array(
            'allowEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Informe seu nome.'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Informe o nome do usuário'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Informe o nome do usuário.'
            )
        )
        
    );
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}
?>