<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->idDependencia=>array('view','id'=>$model->idDependencia),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Dependencia', 'url'=>array('index')),
	array('label'=>'Crear Dependencia', 'url'=>array('create')),
	array('label'=>'Ver Dependencia', 'url'=>array('view', 'id'=>$model->idDependencia)),
	array('label'=>'Administrar Dependencia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Dependencia <?php echo $model->idDependencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>