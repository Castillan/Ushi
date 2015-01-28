<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medicamento', 'url'=>array('index')),
	array('label'=>'Manage Medicamento', 'url'=>array('admin')),
);
?>

<h1>Create Medicamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>