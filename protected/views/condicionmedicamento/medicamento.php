<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'FichaMedica'=>array('index'),
	'Crear',
);


?>

<div class="contenido">
	
	<div class="mainbox">
<h1>Crear Condicionmedicamento</h1>

<?php $this->renderPartial('_crearmedicamento', array('model'=>$model)); ?>
</div></div>