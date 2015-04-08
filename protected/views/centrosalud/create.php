<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Centrosalud', 'url'=>array('index')),
	array('label'=>'Administrar Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Crear Centro de salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>