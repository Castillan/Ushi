<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipo ubicacion', 'url'=>array('index')),
	array('label'=>'Administrar Tipo ubicacion', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de ubicacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>