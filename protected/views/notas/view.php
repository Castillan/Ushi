<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->idNotas,
);

$this->menu=array(
	array('label'=>'Listar Notas', 'url'=>array('index')),
	array('label'=>'Crear Notas', 'url'=>array('create')),
	array('label'=>'Actualizar Notas', 'url'=>array('update', 'id'=>$model->idNotas)),
	array('label'=>'Eliminar Notas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNotas),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Ver Notas #<?php echo $model->idNotas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idNotas',
		'Nota1',
		'Nota2',
		'Nota3',
		'Burbuja',
	),
)); ?>
