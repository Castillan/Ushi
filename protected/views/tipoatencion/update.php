<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	$model->idTipoAtencion=>array('view','id'=>$model->idTipoAtencion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipoatencion', 'url'=>array('index')),
	array('label'=>'Create Tipoatencion', 'url'=>array('create')),
	array('label'=>'View Tipoatencion', 'url'=>array('view', 'id'=>$model->idTipoAtencion)),
	array('label'=>'Manage Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Update Tipoatencion <?php echo $model->idTipoAtencion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>