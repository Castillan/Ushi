<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idCargo=>array('view','id'=>$model->idCargo),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Crear Cargo', 'url'=>array('create')),
	array('label'=>'Ver Cargo', 'url'=>array('view', 'id'=>$model->idCargo)),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cargo <?php echo $model->idCargo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>