<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	$model->idNivelEducativo,
);

$this->menu=array(
	array('label'=>'Listar Niveleducativo', 'url'=>array('index')),
	array('label'=>'Crear Niveleducativo', 'url'=>array('create')),
	array('label'=>'Actualizar Niveleducativo', 'url'=>array('update', 'id'=>$model->idNivelEducativo)),
	array('label'=>'Eliminar Niveleducativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNivelEducativo),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Ver Niveleducativo #<?php echo $model->idNivelEducativo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nivel_Educativo',
		'idNivelEducativo',
	),
)); ?>
