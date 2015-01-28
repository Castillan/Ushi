<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->idEducacion,
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'Update Educacion', 'url'=>array('update', 'id'=>$model->idEducacion)),
	array('label'=>'Delete Educacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEducacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>View Educacion #<?php echo $model->idEducacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEducacion',
		'Nombre',
	),
)); ?>
