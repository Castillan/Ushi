<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Trabajador accidente', 'url'=>array('index')),
	array('label'=>'Administrar Trabajador accidente', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Informacion del Afectado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div></div>