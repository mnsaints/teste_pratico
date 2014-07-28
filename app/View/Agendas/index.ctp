<ol class="breadcrumb">
  <li><?php echo $this->Html->link('Home', array('controller' => 'agendas', 'action' => 'index')); ?></li>
  <li class="pull-right"><span class="user-name">Olá, <b><?php echo $this->Session->read('Auth.User.name'); ?></b> <a href="/cakephp/users/logout">sair</a></span></li>
</ol>

<div id="flashMessage" class="alert" style="display:none"></div>
<h2>Minha agenda <?php echo $this->Html->link('Nova atividade', array('controller' => 'agendas', 'action' => 'add'),array('class' => 'btn btn-primary btn-xs btn-add')); ?></h2><br />



<table class="table table-striped">
    <thead>
        <th>Data <span class="<?php if ($agendas){ echo "order_date "; }?> glyphicon glyphicon-sort-by-attributes asc"></span> </th>
        <th>Título <span class="<?php if ($agendas){ echo "order_string "; } ?> glyphicon glyphicon-sort-by-attributes asc"></span></th>
		<th>Descrição</th>
		<th></th>
       
    </thead>
	<tbody>

<?php 
		if ($agendas):
				foreach ($agendas as $agenda): ?>
				<tr>
					<td><?php echo date('d/m/Y', strtotime($agenda['Agenda']['date_event'])); ?></td> 
					<td><?php echo $agenda['Agenda']['title']; ?></td>
					<td><?php echo $agenda['Agenda']['description']; ?></td>
					<td><?php echo $this->html->link('excluir',array('action'=>'delete',$agenda['Agenda']['id']),array('class'=>'confirm_del'));?></td>
				</tr>	         
				<?php endforeach;  ?>
<?php else: ?>
 			<tr>
				<td colspan="4"><?php echo "Você não possue atividades cadastradas."; ?></td>					
			</tr>
 		 
 
 
<?php  endif; ?>
</tbody>
</table>

