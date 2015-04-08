<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	$model->idTipoRuta,
);

$this->menu=array(
	array('label'=>'Listar Tiporuta', 'url'=>array('index')),
	array('label'=>'Crear Tiporuta', 'url'=>array('create')),
	array('label'=>'Actualizar Tiporuta', 'url'=>array('update', 'id'=>$model->idTipoRuta)),
	array('label'=>'Eliminar Tiporuta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoRuta),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Ver Tiporuta #<?php echo $model->idTipoRuta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoRuta',
		'Nombre',
	),
)); ?>
