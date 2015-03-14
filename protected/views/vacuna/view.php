<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idVacuna,
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'Update Vacuna', 'url'=>array('update', 'id'=>$model->idVacuna)),
	array('label'=>'Delete Vacuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVacuna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>View Vacuna #<?php echo $model->idVacuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVacuna',
		'Nombre',
		'Descripcion',
	),
)); ?>
