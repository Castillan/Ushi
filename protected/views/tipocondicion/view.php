<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	$model->idTipoCondicion,
);

$this->menu=array(
	array('label'=>'Listar Tipocondicion', 'url'=>array('index')),
	array('label'=>'Crear Tipocondicion', 'url'=>array('create')),
	array('label'=>'Actualizar Tipocondicion', 'url'=>array('update', 'id'=>$model->idTipoCondicion)),
	array('label'=>'Eliminar Tipocondicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoCondicion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de condicion #<?php echo $model->idTipoCondicion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoCondicion',
		'Nombre',
	),
)); ?>
