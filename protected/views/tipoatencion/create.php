<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipoatencion', 'url'=>array('index')),
	array('label'=>'Administrar Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo atencion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>