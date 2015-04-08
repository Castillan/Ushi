<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	$model->idDiaSemana,
);

$this->menu=array(
	array('label'=>'Listar Diasemana', 'url'=>array('index')),
	array('label'=>'Crear Diasemana', 'url'=>array('create')),
	array('label'=>'Actualizar Diasemana', 'url'=>array('update', 'id'=>$model->idDiaSemana)),
	array('label'=>'Eliminar Diasemana', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDiaSemana),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Diasemana', 'url'=>array('admin')),
);
?>

<h1>Ver Dia de la semana #<?php echo $model->idDiaSemana; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDiaSemana',
		'Nombre',
	),
)); ?>
