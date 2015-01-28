<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tiporuta', 'url'=>array('index')),
	array('label'=>'Manage Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Create Tiporuta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>