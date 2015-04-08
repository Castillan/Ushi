<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idUbicacion=>array('view','id'=>$model->idUbicacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ubicacion', 'url'=>array('index')),
	array('label'=>'Crear Ubicacion', 'url'=>array('create')),
	array('label'=>'Ver Ubicacion', 'url'=>array('view', 'id'=>$model->idUbicacion)),
	array('label'=>'Administrar Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ubicacion <?php echo $model->idUbicacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>