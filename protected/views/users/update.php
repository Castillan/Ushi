<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Usuario=>array('view','id'=>$model->Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'Ver Users', 'url'=>array('view', 'id'=>$model->Usuario)),
	array('label'=>'Administrar Users', 'url'=>array('admin')),
);
?>

<h1>Actualizar Users <?php echo $model->Usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>