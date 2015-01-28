<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	$model->idTipoUbicacion=>array('view','id'=>$model->idTipoUbicacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipoubicacion', 'url'=>array('index')),
	array('label'=>'Create Tipoubicacion', 'url'=>array('create')),
	array('label'=>'View Tipoubicacion', 'url'=>array('view', 'id'=>$model->idTipoUbicacion)),
	array('label'=>'Manage Tipoubicacion', 'url'=>array('admin')),
);
?>

<h1>Update Tipoubicacion <?php echo $model->idTipoUbicacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>