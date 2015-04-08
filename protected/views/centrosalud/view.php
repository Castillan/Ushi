<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	$model->idCentroSalud,
);

$this->menu=array(
	array('label'=>'Listar Centrosalud', 'url'=>array('index')),
	array('label'=>'Crear Centrosalud', 'url'=>array('create')),
	array('label'=>'Actualizar Centrosalud', 'url'=>array('update', 'id'=>$model->idCentroSalud)),
	array('label'=>'Eliminar Centrosalud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCentroSalud),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Ver Centrosalud #<?php echo $model->idCentroSalud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCentroSalud',
		'Nombre',
		'Direccion',
		'TipoCentro_idTipoCentro',
		'TipoAtencion_idTipoAtencion',
	),
)); ?>
