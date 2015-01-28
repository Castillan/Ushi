<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajadorruta', 'url'=>array('index')),
	array('label'=>'Manage Trabajadorruta', 'url'=>array('admin')),
);
?>

<h1>Create Trabajadorruta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>