<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo $this->Html->css('bootstrap.min'); 
echo $this->Html->css('style_agenda'); 
echo $this->Html->script('bootstrap.min'); 


?>
</head>
<body>

<div class="container-cabecalho">
	<div id="cabecalho" class="layout-centro layout-980">
		<div id="menu"></div>
	</div>
</div>
<div class="container-site">
	<div class="conteudo layout-centro layout-980">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer" class="layout-centro layout-980"></div>
</div>
</body>
</html>