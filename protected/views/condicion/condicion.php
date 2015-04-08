<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>

<h1>Crear Condicion</h1>

<?php $this->renderPartial('_crearforma', array('model'=>$model)); ?>