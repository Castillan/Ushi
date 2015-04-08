<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->idTrabajador=>array('view','id'=>$model->idTrabajador),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Trabajador', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Ver Trabajador', 'url'=>array('view', 'id'=>$model->idTrabajador)),
	array('label'=>'Administrar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Trabajador <?php echo $model->idTrabajador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>