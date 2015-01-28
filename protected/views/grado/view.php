<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	$model->idGrado,
);

$this->menu=array(
	array('label'=>'List Grado', 'url'=>array('index')),
	array('label'=>'Create Grado', 'url'=>array('create')),
	array('label'=>'Update Grado', 'url'=>array('update', 'id'=>$model->idGrado)),
	array('label'=>'Delete Grado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGrado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grado', 'url'=>array('admin')),
);
?>

<h1>View Grado #<?php echo $model->idGrado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGrado',
		'Grado',
	),
)); ?>
