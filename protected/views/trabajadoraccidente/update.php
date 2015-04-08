<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	$model->idTrabajadorAccidente=>array('view','id'=>$model->idTrabajadorAccidente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Trabajador accidente', 'url'=>array('index')),
	array('label'=>'Crear Trabajador accidente', 'url'=>array('create')),
	array('label'=>'Ver Trabajador accidente', 'url'=>array('view', 'id'=>$model->idTrabajadorAccidente)),
	array('label'=>'Administrar Trabajador accidente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Trabajador accidente <?php echo $model->idTrabajadorAccidente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>