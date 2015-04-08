<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Trabajador ruta', 'url'=>array('index')),
	array('label'=>'Administrar Trabajador ruta', 'url'=>array('admin')),
);
?>

<h1>Crear Trabajador ruta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>