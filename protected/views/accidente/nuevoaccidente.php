<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Accidentes', 'url'=>array('index')),
	array('label'=>'Administrar Accidentes', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Registrar un Accidente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


	</div>
</div>
