<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	$model->idTrabajadorAccidente,
);

$this->menu=array(
	array('label'=>'Listar Trabajador accidente', 'url'=>array('index')),
	array('label'=>'Crear Trabajador accidente', 'url'=>array('create')),
	array('label'=>'Actualizar Trabajador accidente', 'url'=>array('update', 'id'=>$model->idTrabajadorAccidente)),
	array('label'=>'Eliminar Trabajador accidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajadorAccidente),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Trabajador accidente', 'url'=>array('admin')),
);
?>

<h1>Ver Trabajador accidente #<?php echo $model->idTrabajadorAccidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrabajadorAccidente',
		'Horas',
		'Minutos',
		'CentroSalud_idCentroSalud',
		'Trabajador_idTrabajador',
	),
)); ?>
