<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	$model->idCentroSalud,
);

$this->menu=array(
	array('label'=>'List Centrosalud', 'url'=>array('index')),
	array('label'=>'Create Centrosalud', 'url'=>array('create')),
	array('label'=>'Update Centrosalud', 'url'=>array('update', 'id'=>$model->idCentroSalud)),
	array('label'=>'Delete Centrosalud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCentroSalud),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centrosalud', 'url'=>array('admin')),
);
?>

<h1>View Centrosalud #<?php echo $model->idCentroSalud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCentroSalud',
		'Nombre',
		'Direccion',
		'TipoCentro_idTipoCentro',
		'TipoAtencion_idTipoAtencion',
	),
)); ?>
