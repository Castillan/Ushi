<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Grado', 'url'=>array('index')),
	array('label'=>'Administrar Grado', 'url'=>array('admin')),
);
?>

<h1>Crear Grado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>