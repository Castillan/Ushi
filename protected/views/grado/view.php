<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	$model->idGrado,
);

$this->menu=array(
	array('label'=>'Listar Grado', 'url'=>array('index')),
	array('label'=>'Crear Grado', 'url'=>array('create')),
	array('label'=>'Actualizar Grado', 'url'=>array('update', 'id'=>$model->idGrado)),
	array('label'=>'Eliminar Grado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGrado),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Grado', 'url'=>array('admin')),
);
?>

<h1>Ver Grado #<?php echo $model->idGrado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGrado',
		'Grado',
	),
)); ?>
