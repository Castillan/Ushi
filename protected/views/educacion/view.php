<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educaciones'=>array('index'),
	$model->idEducacion,
);

$this->menu=array(
	array('label'=>'Listar Educacion', 'url'=>array('index')),
	array('label'=>'Crear Educacion', 'url'=>array('create')),
	array('label'=>'Actualizar Educacion', 'url'=>array('update', 'id'=>$model->idEducacion)),
	array('label'=>'Eliminar Educacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEducacion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Educacion', 'url'=>array('admin')),
);
?>

<h1>Ver Educacion #<?php echo $model->idEducacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEducacion',
		'Nombre',
	),
)); ?>
