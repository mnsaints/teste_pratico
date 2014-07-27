<?php echo $this->Html->script('jquery-1.11.1.min'); ?>
<?php echo $this->Html->script('global_scripts'); ?>

<h2>Agenda</h2>
<?php echo $this->Html->link('Novo evento', array('controller' => 'agendas', 'action' => 'add')); ?>
<table id="sortable">
    <thead>
        <th>Data</th>
        <th>Título</th>
		<th>Descrição</th>
		<th></th>
       
    </thead>
	<tbody>

    <?php 
		//echo  print_r($agendas);
		//echo  print_r($cp);
		
	
	foreach ($agendas as $agenda): ?>
    <tr >
        <td><?php echo date('d/m/Y', strtotime($agenda['Agenda']['date_event'])); ?></td> 
        <td><?php echo $agenda['Agenda']['title']; ?></td>
		<td><?php echo $agenda['Agenda']['description']; ?></td>
		<td><?php echo $this->html->link('Delete',array('action'=>'delete',$agenda['Agenda']['id']),array('class'=>'confirm_del'));
		 
		?></td>
		         
    <?php endforeach;   ?>
	
</tbody>
</table>

