<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	$model->idAccidente=>array('view','id'=>$model->idAccidente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Accidentes', 'url'=>array('index')),
	array('label'=>'Crear Accidente', 'url'=>array('create')),
	array('label'=>'Ver Accidente', 'url'=>array('view', 'id'=>$model->idAccidente)),
	array('label'=>'Administrar Accidentes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Accidente <?php echo $model->idAccidente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>