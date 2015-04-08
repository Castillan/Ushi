<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	$model->idTipoAtencion=>array('view','id'=>$model->idTipoAtencion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipoatencion', 'url'=>array('index')),
	array('label'=>'Crear Tipoatencion', 'url'=>array('create')),
	array('label'=>'Ver Tipoatencion', 'url'=>array('view', 'id'=>$model->idTipoAtencion)),
	array('label'=>'Administrar Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo atencion <?php echo $model->idTipoAtencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>