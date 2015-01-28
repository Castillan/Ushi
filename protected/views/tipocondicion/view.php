<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	$model->idTipoCondicion,
);

$this->menu=array(
	array('label'=>'List Tipocondicion', 'url'=>array('index')),
	array('label'=>'Create Tipocondicion', 'url'=>array('create')),
	array('label'=>'Update Tipocondicion', 'url'=>array('update', 'id'=>$model->idTipoCondicion)),
	array('label'=>'Delete Tipocondicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoCondicion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>View Tipocondicion #<?php echo $model->idTipoCondicion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoCondicion',
		'Nombre',
	),
)); ?>
