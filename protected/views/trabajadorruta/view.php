<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	$model->idTrabajadorRuta,
);

$this->menu=array(
	array('label'=>'Listar Trabajador ruta', 'url'=>array('index')),
	array('label'=>'Crear Trabajador ruta', 'url'=>array('create')),
	array('label'=>'Actualizar Trabajador ruta', 'url'=>array('update', 'id'=>$model->idTrabajadorRuta)),
	array('label'=>'Eliminar Trabajador ruta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajadorRuta),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Trabajador ruta', 'url'=>array('admin')),
);
?>

<h1>Ver Trabajador ruta #<?php echo $model->idTrabajadorRuta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrabajadorRuta',
		'Detalle',
		'TipoRuta_idTipoRuta',
		'Trabajador_idTrabajador',
	),
)); ?>
