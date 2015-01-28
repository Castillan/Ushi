<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	$model->idTrabajadorAccidente=>array('view','id'=>$model->idTrabajadorAccidente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trabajadoraccidente', 'url'=>array('index')),
	array('label'=>'Create Trabajadoraccidente', 'url'=>array('create')),
	array('label'=>'View Trabajadoraccidente', 'url'=>array('view', 'id'=>$model->idTrabajadorAccidente)),
	array('label'=>'Manage Trabajadoraccidente', 'url'=>array('admin')),
);
?>

<h1>Update Trabajadoraccidente <?php echo $model->idTrabajadorAccidente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>