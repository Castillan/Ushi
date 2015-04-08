<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	$model->idTipoCentro,
);

$this->menu=array(
	array('label'=>'Listar Tipocentro', 'url'=>array('index')),
	array('label'=>'Crear Tipocentro', 'url'=>array('create')),
	array('label'=>'Actualizar Tipocentro', 'url'=>array('update', 'id'=>$model->idTipoCentro)),
	array('label'=>'Eliminar Tipocentro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoCentro),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo centro #<?php echo $model->idTipoCentro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoCentro',
		'Nombre',
		'Descripcion',
	),
)); ?>
