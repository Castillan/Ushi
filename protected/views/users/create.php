<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Users', 'url'=>array('index')),
	array('label'=>'Administrar Users', 'url'=>array('admin')),
);
?>

<h1>Crear Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>