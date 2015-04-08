<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->idRoles,
);

$this->menu=array(
	array('label'=>'Listar Roles', 'url'=>array('index')),
	array('label'=>'Crear Roles', 'url'=>array('create')),
	array('label'=>'Actualizar Roles', 'url'=>array('update', 'id'=>$model->idRoles)),
	array('label'=>'Eliminar Roles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRoles),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Roles', 'url'=>array('admin')),
);
?>

<h1>Ver Roles #<?php echo $model->idRoles; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRoles',
		'Nombre',
		'Descripcion',
	),
)); ?>
