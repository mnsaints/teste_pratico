<h2>Adicionar Evento</h2>
<?php
	echo $this->Form->create('Agenda');
	echo $this->Form->input('date_event',array('label' => 'Data', 'class'=> 'date-picker' ));
	echo $this->Form->input('title',array('label' => 'Título'));
	echo $this->Form->input('description',array('label' => 'Descrição'));
	echo $this->Form->end('Salvar');
?>