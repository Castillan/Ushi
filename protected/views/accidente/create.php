<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accidente', 'url'=>array('index')),
	array('label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<h1>Create Accidente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>