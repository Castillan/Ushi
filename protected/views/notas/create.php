<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Notas', 'url'=>array('index')),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Crear Notas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>