<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	$model->idTipoRuta,
);

$this->menu=array(
	array('label'=>'List Tiporuta', 'url'=>array('index')),
	array('label'=>'Create Tiporuta', 'url'=>array('create')),
	array('label'=>'Update Tiporuta', 'url'=>array('update', 'id'=>$model->idTipoRuta)),
	array('label'=>'Delete Tiporuta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoRuta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tiporuta', 'url'=>array('admin')),
);
?>

<h1>View Tiporuta #<?php echo $model->idTipoRuta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoRuta',
		'Nombre',
	),
)); ?>
