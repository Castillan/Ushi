<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idVacuna,
);

$this->menu=array(
	array('label'=>'Listar Vacuna', 'url'=>array('index')),
	array('label'=>'Crear Vacuna', 'url'=>array('create')),
	array('label'=>'Actualizar Vacuna', 'url'=>array('update', 'id'=>$model->idVacuna)),
	array('label'=>'Eliminar Vacuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVacuna),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Vacuna', 'url'=>array('admin')),
);
?>

<h1>Ver Vacuna #<?php echo $model->idVacuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVacuna',
		'Nombre',
		'Descripcion',
	),
)); ?>
