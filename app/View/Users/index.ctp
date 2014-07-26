
<h2>Usu&aacute;rios</h2>
<?php echo $this->Html->link('Novo usuário', array('controller' => 'users', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
       
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td> 
        <td><?php echo $user['User']['username']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

