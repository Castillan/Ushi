<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	$model->idTrabajadorRuta,
);

$this->menu=array(
	array('label'=>'List Trabajadorruta', 'url'=>array('index')),
	array('label'=>'Create Trabajadorruta', 'url'=>array('create')),
	array('label'=>'Update Trabajadorruta', 'url'=>array('update', 'id'=>$model->idTrabajadorRuta)),
	array('label'=>'Delete Trabajadorruta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajadorRuta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajadorruta', 'url'=>array('admin')),
);
?>

<h1>View Trabajadorruta #<?php echo $model->idTrabajadorRuta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrabajadorRuta',
		'Detalle',
		'TipoRuta_idTipoRuta',
		'Trabajador_idTrabajador',
	),
)); ?>
