<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	$model->idGrado=>array('view','id'=>$model->idGrado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grado', 'url'=>array('index')),
	array('label'=>'Create Grado', 'url'=>array('create')),
	array('label'=>'View Grado', 'url'=>array('view', 'id'=>$model->idGrado)),
	array('label'=>'Manage Grado', 'url'=>array('admin')),
);
?>

<h1>Update Grado <?php echo $model->idGrado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>