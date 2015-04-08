<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	$model->idTrabajadorRuta=>array('view','id'=>$model->idTrabajadorRuta),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Trabajador ruta', 'url'=>array('index')),
	array('label'=>'Crear Trabajador ruta', 'url'=>array('create')),
	array('label'=>'Ver Trabajador ruta', 'url'=>array('view', 'id'=>$model->idTrabajadorRuta)),
	array('label'=>'Administrar Trabajador ruta', 'url'=>array('admin')),
);
?>

<h1>Actualizar Trabajador ruta <?php echo $model->idTrabajadorRuta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>