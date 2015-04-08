<?php
/* @var $this TipoatencionController */
/* @var $model Tipoatencion */

$this->breadcrumbs=array(
	'Tipoatencions'=>array('index'),
	$model->idTipoAtencion,
);

$this->menu=array(
	array('label'=>'Listar Tipoatencion', 'url'=>array('index')),
	array('label'=>'Crear Tipoatencion', 'url'=>array('create')),
	array('label'=>'Actualizar Tipoatencion', 'url'=>array('update', 'id'=>$model->idTipoAtencion)),
	array('label'=>'Eliminar Tipoatencion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoAtencion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo atencion #<?php echo $model->idTipoAtencion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoAtencion',
		'Nombre',
		'Descripcion',
	),
)); ?>
