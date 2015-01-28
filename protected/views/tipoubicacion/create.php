<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipoubicacion', 'url'=>array('index')),
	array('label'=>'Manage Tipoubicacion', 'url'=>array('admin')),
);
?>

<h1>Create Tipoubicacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>