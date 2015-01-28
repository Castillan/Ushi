<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Centrosalud', 'url'=>array('index')),
	array('label'=>'Manage Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Create Centrosalud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>