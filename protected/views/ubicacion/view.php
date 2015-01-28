<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idUbicacion,
);

$this->menu=array(
	array('label'=>'List Ubicacion', 'url'=>array('index')),
	array('label'=>'Create Ubicacion', 'url'=>array('create')),
	array('label'=>'Update Ubicacion', 'url'=>array('update', 'id'=>$model->idUbicacion)),
	array('label'=>'Delete Ubicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUbicacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ubicacion', 'url'=>array('admin')),
);
?>

<h1>View Ubicacion #<?php echo $model->idUbicacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUbicacion',
		'Nombre',
		'Ubicacion_idUbicacion',
		'TipoUbicacion_idTipoUbicacion',
	),
)); ?>
