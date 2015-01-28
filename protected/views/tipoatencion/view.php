<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	$model->idTipoAtencion,
);

$this->menu=array(
	array('label'=>'List Tipoatencion', 'url'=>array('index')),
	array('label'=>'Create Tipoatencion', 'url'=>array('create')),
	array('label'=>'Update Tipoatencion', 'url'=>array('update', 'id'=>$model->idTipoAtencion)),
	array('label'=>'Delete Tipoatencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoAtencion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>View Tipoatencion #<?php echo $model->idTipoAtencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoAtencion',
		'Nombre',
		'Descripcion',
	),
)); ?>
