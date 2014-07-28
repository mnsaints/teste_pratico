<div class="users form">
	<?php echo $this->Form->create('User',array('class' => 'form-horizontal'));?>
    <ol class="breadcrumb">
      <li><?php echo $this->Html->link('Home', array('controller' => 'agendas', 'action' => 'index')); ?></li>
      
    </ol>
    <h2>Novo usuário</h2><br />
        
            <div class="form-group">				
                <div class="col-sm-10">
                 <?php echo $this->Form->input('name',array('label' => 'Nome','class'=> 'form-control')); ?>
                </div>
            </div>
            <div class="form-group">				
                <div class="col-sm-10">
                 <?php echo $this->Form->input('username',array('label' => 'Usuário','class'=> 'form-control')); ?>
                </div>
            </div>
            <div class="form-group">				
                <div class="col-sm-10">
                 <?php echo $this->Form->input('password',array('label' => 'Senha','class'=> 'form-control')); ?>
                </div>
            </div>
            
            <?php 			
                echo $this->Form->button('Salvar', array('class' => 'btn btn-primary'));
            ?>
</div>