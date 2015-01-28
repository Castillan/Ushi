<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->idTrabajador=>array('view','id'=>$model->idTrabajador),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Create Trabajador', 'url'=>array('create')),
	array('label'=>'View Trabajador', 'url'=>array('view', 'id'=>$model->idTrabajador)),
	array('label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<h1>Update Trabajador <?php echo $model->idTrabajador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>