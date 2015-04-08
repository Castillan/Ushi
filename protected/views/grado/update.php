<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	$model->idGrado=>array('view','id'=>$model->idGrado),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Grado', 'url'=>array('index')),
	array('label'=>'Crear Grado', 'url'=>array('create')),
	array('label'=>'Ver Grado', 'url'=>array('view', 'id'=>$model->idGrado)),
	array('label'=>'Administrar Grado', 'url'=>array('admin')),
);
?>

<h1>Actualizar Grado <?php echo $model->idGrado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>