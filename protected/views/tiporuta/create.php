<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tiporuta', 'url'=>array('index')),
	array('label'=>'Administrar Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Crear Tiporuta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>