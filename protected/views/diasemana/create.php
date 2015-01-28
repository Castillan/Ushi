<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diasemana', 'url'=>array('index')),
	array('label'=>'Manage Diasemana', 'url'=>array('admin')),
);
?>

<h1>Create Diasemana</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>