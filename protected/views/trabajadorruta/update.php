<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	$model->idTrabajadorRuta=>array('view','id'=>$model->idTrabajadorRuta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajadorruta', 'url'=>array('index')),
	array('label'=>'Create Trabajadorruta', 'url'=>array('create')),
	array('label'=>'View Trabajadorruta', 'url'=>array('view', 'id'=>$model->idTrabajadorRuta)),
	array('label'=>'Manage Trabajadorruta', 'url'=>array('admin')),
);
?>

<h1>Update Trabajadorruta <?php echo $model->idTrabajadorRuta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>