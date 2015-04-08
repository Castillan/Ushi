<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	$model->idCondicion,
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Crear Condicion', 'url'=>array('create')),
	array('label'=>'Actualizar Condicion', 'url'=>array('update', 'id'=>$model->idCondicion)),
	array('label'=>'Eliminar Condicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCondicion),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>

<h1>Ver Condicion #<?php echo $model->idCondicion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fichaMedicaIdFichaMedica.personaIdPersona.Nombre',
		'fichaMedicaIdFichaMedica.personaIdPersona.Apellido',
		'fichaMedicaIdFichaMedica.personaIdPersona.Cedula',
		'Ficha_Medica_idFicha_Medica',
		'Detalle',
		'tipoCondicionIdTipoCondicion.Nombre',
		
	),
)); ?>
