<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Usuario,
);

$this->menu=array(
	array('label'=>'Listar Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'Actualizar Users', 'url'=>array('update', 'id'=>$model->Usuario)),
	array('label'=>'Eliminar Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Usuario),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Users', 'url'=>array('admin')),
);
?>

<h1>Ver Users #<?php echo $model->Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Usuario',
		'Password',
		'Roles_idRoles',
	),
)); ?>
