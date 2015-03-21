<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	$model->idNivelEducativo,
);

$this->menu=array(
	array('label'=>'List Niveleducativo', 'url'=>array('index')),
	array('label'=>'Create Niveleducativo', 'url'=>array('create')),
	array('label'=>'Update Niveleducativo', 'url'=>array('update', 'id'=>$model->idNivelEducativo)),
	array('label'=>'Delete Niveleducativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNivelEducativo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>View Niveleducativo #<?php echo $model->idNivelEducativo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nivel_Educativo',
		'idNivelEducativo',
	),
)); ?>
