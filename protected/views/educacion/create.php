<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Educacion', 'url'=>array('index')),
	array('label'=>'Administrar Educacion', 'url'=>array('admin')),
);
?>

<h1>Crear Educacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>