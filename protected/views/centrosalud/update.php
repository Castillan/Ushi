<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	$model->idCentroSalud=>array('view','id'=>$model->idCentroSalud),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centrosalud', 'url'=>array('index')),
	array('label'=>'Create Centrosalud', 'url'=>array('create')),
	array('label'=>'View Centrosalud', 'url'=>array('view', 'id'=>$model->idCentroSalud)),
	array('label'=>'Manage Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Update Centrosalud <?php echo $model->idCentroSalud; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>