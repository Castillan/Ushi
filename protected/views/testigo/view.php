<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	$model->idTestigo,
);

$this->menu=array(
	array('label'=>'Listar Testigo', 'url'=>array('index')),
	array('label'=>'Crear Testigo', 'url'=>array('create')),
	array('label'=>'Actualizar Testigo', 'url'=>array('update', 'id'=>$model->idTestigo)),
	array('label'=>'Eliminar Testigo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTestigo),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Testigo', 'url'=>array('admin')),
);
?>

<h1>Ver Testigo #<?php echo $model->idTestigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Persona_idPersona',
		'Accidente_idAccidente',
		'idTestigo',
	),
)); ?>
