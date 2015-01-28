<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	$model->idTrabajadorAccidente,
);

$this->menu=array(
	array('label'=>'List Trabajadoraccidente', 'url'=>array('index')),
	array('label'=>'Create Trabajadoraccidente', 'url'=>array('create')),
	array('label'=>'Update Trabajadoraccidente', 'url'=>array('update', 'id'=>$model->idTrabajadorAccidente)),
	array('label'=>'Delete Trabajadoraccidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajadorAccidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajadoraccidente', 'url'=>array('admin')),
);
?>

<h1>View Trabajadoraccidente #<?php echo $model->idTrabajadorAccidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Accidente_idAccidente',
		'idTrabajadorAccidente',
		'Horas',
		'Minutos',
		'CentroSalud_idCentroSalud',
		'Trabajador_idTrabajador',
	),
)); ?>
