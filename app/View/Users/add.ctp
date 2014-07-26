<h2>Adicionar Usu&aacute;rio</h2>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username',array('label' => 'Nome'));
echo $this->Form->input('userlogin',array('label' => 'Login'));
echo $this->Form->input('userpass',array('label' => 'Senha'));
echo $this->Form->end('Salvar');
?>