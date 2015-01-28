<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	$model->idEdo_Civil,
);

$this->menu=array(
	array('label'=>'List EdoCivil', 'url'=>array('index')),
	array('label'=>'Create EdoCivil', 'url'=>array('create')),
	array('label'=>'Update EdoCivil', 'url'=>array('update', 'id'=>$model->idEdo_Civil)),
	array('label'=>'Delete EdoCivil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEdo_Civil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EdoCivil', 'url'=>array('admin')),
);
?>

<h1>View EdoCivil #<?php echo $model->idEdo_Civil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEdo_Civil',
		'Nombre',
	),
)); ?>
