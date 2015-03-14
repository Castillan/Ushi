<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->idNotas,
);

$this->menu=array(
	array('label'=>'List Notas', 'url'=>array('index')),
	array('label'=>'Create Notas', 'url'=>array('create')),
	array('label'=>'Update Notas', 'url'=>array('update', 'id'=>$model->idNotas)),
	array('label'=>'Delete Notas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNotas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notas', 'url'=>array('admin')),
);
?>

<h1>View Notas #<?php echo $model->idNotas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idNotas',
		'Nota1',
		'Nota2',
		'Nota3',
	),
)); ?>
