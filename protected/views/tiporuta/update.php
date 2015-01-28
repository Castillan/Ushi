<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	$model->idTipoRuta=>array('view','id'=>$model->idTipoRuta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tiporuta', 'url'=>array('index')),
	array('label'=>'Create Tiporuta', 'url'=>array('create')),
	array('label'=>'View Tiporuta', 'url'=>array('view', 'id'=>$model->idTipoRuta)),
	array('label'=>'Manage Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Update Tiporuta <?php echo $model->idTipoRuta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>