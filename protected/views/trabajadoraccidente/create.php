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

<h1>Crear Trabajador accidente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>