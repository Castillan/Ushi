<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->idDependencia,
);

$this->menu=array(
	array('label'=>'Listar Dependencia', 'url'=>array('index')),
	array('label'=>'Crear Dependencia', 'url'=>array('create')),
	array('label'=>'Actualizar Dependencia', 'url'=>array('update', 'id'=>$model->idDependencia)),
	array('label'=>'Eliminar Dependencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDependencia),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Dependencia', 'url'=>array('admin')),
);
?>

<h1>Ver Dependencia #<?php echo $model->idDependencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDependencia',
		'Nombre',
	),
)); ?>
