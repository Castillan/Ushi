<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	$model->idEdo_Civil,
);

$this->menu=array(
	array('label'=>'Listar EdoCivil', 'url'=>array('index')),
	array('label'=>'Crear EdoCivil', 'url'=>array('create')),
	array('label'=>'Actualizar EdoCivil', 'url'=>array('update', 'id'=>$model->idEdo_Civil)),
	array('label'=>'Eliminar EdoCivil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEdo_Civil),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Ver Estado Civil #<?php echo $model->idEdo_Civil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEdo_Civil',
		'Nombre',
	),
)); ?>
