<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idCargo,
);

$this->menu=array(
	array('label'=>'List Cargo', 'url'=>array('index')),
	array('label'=>'Create Cargo', 'url'=>array('create')),
	array('label'=>'Update Cargo', 'url'=>array('update', 'id'=>$model->idCargo)),
	array('label'=>'Delete Cargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCargo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<h1>View Cargo #<?php echo $model->idCargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCargo',
		'Nombre',
		'Descripcion',
	),
)); ?>
