<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo $this->Html->script('jquery-1.11.1.min');
echo $this->Html->script('global_scripts');
echo $this->Html->css('bootstrap.min'); 
echo $this->Html->script('bootstrap.min'); 
echo $this->Html->css('style_agenda'); 

?>
</head>
<body>

<div id="container-cabecalho">
	<div id="cabecalho" class="layout-centro layout-980">
		
	</div>
</div>
<div id="container-site">
	<div id="conteudo" class="layout-centro layout-980">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="rodape" class="layout-centro layout-980"><span class="pull-right">Agenda - OxenTI Solutions</span></div>
</div>
</body>
</html>