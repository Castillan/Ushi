<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	$model->idTipoUbicacion=>array('view','id'=>$model->idTipoUbicacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipo ubicacion', 'url'=>array('index')),
	array('label'=>'Crear Tipo ubicacion', 'url'=>array('create')),
	array('label'=>'Ver Tipo ubicacion', 'url'=>array('view', 'id'=>$model->idTipoUbicacion)),
	array('label'=>'Administrar Tipo ubicacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de ubicacion <?php echo $model->idTipoUbicacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>