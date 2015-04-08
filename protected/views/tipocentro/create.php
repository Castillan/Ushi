<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipocentro', 'url'=>array('index')),
	array('label'=>'Administrar Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo centro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>