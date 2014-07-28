<?php echo $this->Html->css('datepicker'); ?>
<?php echo $this->Html->script('bootstrap-datepicker'); ?>
<script type="text/javascript">
	$(function(){	
		 var options = new Array();
		 options['format'] = 'dd-mm-yyyy';
		 $('.datepicker').datepicker(options);
	})
</script>
<ol class="breadcrumb">
  <li><?php echo $this->Html->link('Home', array('controller' => 'agendas', 'action' => 'index')); ?></li>
  <li class="pull-right"><span class="user-name">Olá, <b><?php echo $this->Session->read('Auth.User.name'); ?></b> <a href="/cakephp/users/logout">sair</a></span></li>
</ol>
<h2>Nova atividade</h2><br />
<?php
	echo $this->Form->create('Agenda',array('class' => 'form-horizontal'));
?>	

            <div class="input-append date"  >
            	<label>Data</label><br />
 				<?php echo $this->Form->input('date_event',array('label' => false, 'class'=> 'datepicker span2', 'type' => 'text' ));?>         <span class="add-on"><i class="icon-th"></i></span>
            </div>

			 
			
			 <div class="form-group">				
				<div class="col-sm-10">
				 <?php echo $this->Form->input('title',array('label' => 'Título','class'=> 'form-control'));?>
				</div>
			 </div>
			 <div class="form-group">				
				<div class="col-sm-10">
				 <?php echo $this->Form->input('description',array('label' => 'Descrição','class'=> 'form-control'));?>
				</div>
			 </div>
			 	
			<?php echo $this->Form->button('Salvar', array('class' => 'btn btn-primary'));?>
