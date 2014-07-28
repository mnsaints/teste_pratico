<div class="box-login layout-centro">
	<?php //echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User',array('class' => 'form-horizontal'));?>
		
			<legend><?php echo __('Acesso'); ?></legend>
			  <div class="form-group">
				
				<div class="col-sm-10">
				 <?php echo $this->Form->input('username',array('label' => 'Usuário','class' => 'form-control'));?>
				</div>
			  </div>
			  <div class="form-group">
				
				<div class="col-sm-10">
				 <?php 	echo $this->Form->input('password',array('label' => 'Senha', 'class' => 'form-control'));?>
				</div>
			  </div>
			
			
			
		
	<?php echo $this->Form->button('Entrar', array('class' => 'btn btn-primary'));?>
	<?php echo $this->Html->link('Cadastre-se', array('controller' => 'users', 'action' => 'add')); ?>
	
</div>
