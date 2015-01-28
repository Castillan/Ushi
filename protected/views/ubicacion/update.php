<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idUbicacion=>array('view','id'=>$model->idUbicacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ubicacion', 'url'=>array('index')),
	array('label'=>'Create Ubicacion', 'url'=>array('create')),
	array('label'=>'View Ubicacion', 'url'=>array('view', 'id'=>$model->idUbicacion)),
	array('label'=>'Manage Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Update Ubicacion <?php echo $model->idUbicacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>