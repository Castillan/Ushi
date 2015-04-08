<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idUbicacion,
);

$this->menu=array(
	array('label'=>'Listar Ubicacion', 'url'=>array('index')),
	array('label'=>'Crear Ubicacion', 'url'=>array('create')),
	array('label'=>'Actualizar Ubicacion', 'url'=>array('update', 'id'=>$model->idUbicacion)),
	array('label'=>'Eliminar Ubicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUbicacion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Ver Ubicacion #<?php echo $model->idUbicacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUbicacion',
		'Nombre',
		'Ubicacion_idUbicacion',
		'TipoUbicacion_idTipoUbicacion',
	),
)); ?>
