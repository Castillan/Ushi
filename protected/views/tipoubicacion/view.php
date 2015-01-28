<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	$model->idTipoUbicacion,
);

$this->menu=array(
	array('label'=>'List Tipoubicacion', 'url'=>array('index')),
	array('label'=>'Create Tipoubicacion', 'url'=>array('create')),
	array('label'=>'Update Tipoubicacion', 'url'=>array('update', 'id'=>$model->idTipoUbicacion)),
	array('label'=>'Delete Tipoubicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoUbicacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipoubicacion', 'url'=>array('admin')),
);
?>

<h1>View Tipoubicacion #<?php echo $model->idTipoUbicacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoUbicacion',
		'Nombre',
	),
)); ?>
