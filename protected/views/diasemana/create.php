<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Diasemana', 'url'=>array('index')),
	array('label'=>'Administrar Diasemana', 'url'=>array('admin')),
);
?>

<h1>Crear Dia de la semana</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>