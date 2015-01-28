<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	$model->idTipoCentro,
);

$this->menu=array(
	array('label'=>'List Tipocentro', 'url'=>array('index')),
	array('label'=>'Create Tipocentro', 'url'=>array('create')),
	array('label'=>'Update Tipocentro', 'url'=>array('update', 'id'=>$model->idTipoCentro)),
	array('label'=>'Delete Tipocentro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoCentro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipocentro', 'url'=>array('admin')),
);
?>

<h1>View Tipocentro #<?php echo $model->idTipoCentro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoCentro',
		'Nombre',
		'Descripcion',
	),
)); ?>
