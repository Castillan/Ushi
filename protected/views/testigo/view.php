<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	$model->idTestigo,
);

$this->menu=array(
	array('label'=>'List Testigo', 'url'=>array('index')),
	array('label'=>'Create Testigo', 'url'=>array('create')),
	array('label'=>'Update Testigo', 'url'=>array('update', 'id'=>$model->idTestigo)),
	array('label'=>'Delete Testigo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTestigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Testigo', 'url'=>array('admin')),
);
?>

<h1>View Testigo #<?php echo $model->idTestigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Persona_idPersona',
		'Accidente_idAccidente',
		'idTestigo',
	),
)); ?>
