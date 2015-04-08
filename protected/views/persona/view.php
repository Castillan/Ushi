<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->idPersona,
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Crear Persona', 'url'=>array('create')),
	array('label'=>'Actualizar Persona', 'url'=>array('update', 'id'=>$model->idPersona)),
	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPersona),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Ver Persona #<?php echo $model->idPersona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPersona',
		'Nombre',
		'Apellido',
		'Cedula',
		'FechaNacimiento',
		'Direccion',
		'Telefono',
		'Celular',
	),
)); ?>
