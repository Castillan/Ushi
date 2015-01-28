<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->idAccidente,
);

$this->menu=array(
	array('label'=>'List Accidente', 'url'=>array('index')),
	array('label'=>'Create Accidente', 'url'=>array('create')),
	array('label'=>'Update Accidente', 'url'=>array('update', 'id'=>$model->idAccidente)),
	array('label'=>'Delete Accidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAccidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<h1>View Accidente #<?php echo $model->idAccidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAccidente',
		'Fecha',
		'DiaSemana_idDiaSemana',
		'Hora',
		'Dentro',
		'Ubicacion_idUbicacion',
		'Lugar',
		'Descripcion',
	),
)); ?>
