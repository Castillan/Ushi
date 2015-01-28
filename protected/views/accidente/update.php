<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->idAccidente=>array('view','id'=>$model->idAccidente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accidente', 'url'=>array('index')),
	array('label'=>'Create Accidente', 'url'=>array('create')),
	array('label'=>'View Accidente', 'url'=>array('view', 'id'=>$model->idAccidente)),
	array('label'=>'Manage Accidente', 'url'=>array('admin')),
);
?>

<h1>Update Accidente <?php echo $model->idAccidente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>