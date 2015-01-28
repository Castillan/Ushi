<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	$model->idDiaSemana,
);

$this->menu=array(
	array('label'=>'List Diasemana', 'url'=>array('index')),
	array('label'=>'Create Diasemana', 'url'=>array('create')),
	array('label'=>'Update Diasemana', 'url'=>array('update', 'id'=>$model->idDiaSemana)),
	array('label'=>'Delete Diasemana', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDiaSemana),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diasemana', 'url'=>array('admin')),
);
?>

<h1>View Diasemana #<?php echo $model->idDiaSemana; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDiaSemana',
		'Nombre',
	),
)); ?>
