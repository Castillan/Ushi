<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idCargo,
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Crear Cargo', 'url'=>array('create')),
	array('label'=>'Actualizar Cargo', 'url'=>array('update', 'id'=>$model->idCargo)),
	array('label'=>'Eliminar Cargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCargo),'confirm'=>'Seguro que quiere eliminar este registro ?')),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Ver Cargo #<?php echo $model->idCargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCargo',
		'Nombre',
		'Descripcion',
	),
)); ?>
