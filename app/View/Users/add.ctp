<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend>Novo Usuário</legend>
        <?php 	
			echo $this->Form->input('name',array('label' => 'Nome'));
			echo $this->Form->input('username',array('label' => 'Usuário'));
			echo $this->Form->input('password',array('label' => 'Senha'));
			echo $this->Form->end('Salvar');
		?>
    </fieldset>
</div>