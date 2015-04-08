<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->idRoles=>array('view','id'=>$model->idRoles),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Roles', 'url'=>array('index')),
	array('label'=>'Crear Roles', 'url'=>array('create')),
	array('label'=>'Ver Roles', 'url'=>array('view', 'id'=>$model->idRoles)),
	array('label'=>'Administrar Roles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Roles <?php echo $model->idRoles; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>