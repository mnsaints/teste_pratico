<h2>Agenda</h2>
<?php echo $this->Html->link('Novo evento', array('controller' => 'agendas', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Data</th>
        <th>Título</th>
		<th>Descrição</th>
       
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($agendas as $agenda): ?>
    <tr>
        <td><?php echo $agenda['Agenda']['data']; ?></td> 
        <td><?php echo $agenda['Agenda']['title']; ?></td>
		<td><?php echo $agenda['Agenda']['description']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

