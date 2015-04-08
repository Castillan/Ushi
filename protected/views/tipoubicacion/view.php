<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	$model->idTipoUbicacion,
);

$this->menu=array(
	array('label'=>'Listar Tipo ubicacion', 'url'=>array('index')),
	array('label'=>'Crear Tipo ubicacion', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo ubicacion', 'url'=>array('update', 'id'=>$model->idTipoUbicacion)),
	array('label'=>'Eliminar Tipo ubicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoUbicacion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Tipo ubicacion', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de ubicacion #<?php echo $model->idTipoUbicacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoUbicacion',
		'Nombre',
	),
)); ?>
