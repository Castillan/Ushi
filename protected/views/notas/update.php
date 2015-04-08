<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->idNotas=>array('view','id'=>$model->idNotas),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Notas', 'url'=>array('index')),
	array('label'=>'Crear Notas', 'url'=>array('create')),
	array('label'=>'Ver Notas', 'url'=>array('view', 'id'=>$model->idNotas)),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Notas <?php echo $model->idNotas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>