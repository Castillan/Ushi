<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	$model->idTipoRuta=>array('view','id'=>$model->idTipoRuta),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tiporuta', 'url'=>array('index')),
	array('label'=>'Crear Tiporuta', 'url'=>array('create')),
	array('label'=>'Ver Tiporuta', 'url'=>array('view', 'id'=>$model->idTipoRuta)),
	array('label'=>'Administrar Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tiporuta <?php echo $model->idTipoRuta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>