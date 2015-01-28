<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipocentro', 'url'=>array('index')),
	array('label'=>'Manage Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Create Tipocentro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>