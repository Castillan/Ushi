<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	$model->idDiaSemana=>array('view','id'=>$model->idDiaSemana),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Diasemana', 'url'=>array('index')),
	array('label'=>'Crear Diasemana', 'url'=>array('create')),
	array('label'=>'Ver Diasemana', 'url'=>array('view', 'id'=>$model->idDiaSemana)),
	array('label'=>'Administrar Diasemana', 'url'=>array('admin')),
);
?>

<h1>Actualizar Dia de la semana <?php echo $model->idDiaSemana; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>