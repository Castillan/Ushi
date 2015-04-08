<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Vacuna', 'url'=>array('index')),
	array('label'=>'Administrar Vacuna', 'url'=>array('admin')),
);
?>

<h1>Crear Vacuna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>