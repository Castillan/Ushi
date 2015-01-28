<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Manage Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Create Condicionmedicamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>