<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	$model->idCentroSalud=>array('view','id'=>$model->idCentroSalud),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Centrosalud', 'url'=>array('index')),
	array('label'=>'Crear Centrosalud', 'url'=>array('create')),
	array('label'=>'Ver Centrosalud', 'url'=>array('view', 'id'=>$model->idCentroSalud)),
	array('label'=>'Administrar Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Actualizar Centro de salud <?php echo $model->idCentroSalud; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>