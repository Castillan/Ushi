<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	'Create',
);


?>

<h1>Ingrese Datos del Trabajador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>