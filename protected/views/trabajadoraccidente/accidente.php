<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajadoraccidente', 'url'=>array('index')),
	array('label'=>'Manage Trabajadoraccidente', 'url'=>array('admin')),
);
?>

<h1>Informacion del Afectado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>