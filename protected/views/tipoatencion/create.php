<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipoatencion', 'url'=>array('index')),
	array('label'=>'Manage Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Create Tipoatencion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>