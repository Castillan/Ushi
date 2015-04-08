<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ubicacion', 'url'=>array('index')),
	array('label'=>'Administrar Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Crear Ubicacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>