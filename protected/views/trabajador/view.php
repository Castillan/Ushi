<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->idTrabajador,
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Create Trabajador', 'url'=>array('create')),
	array('label'=>'Update Trabajador', 'url'=>array('update', 'id'=>$model->idTrabajador)),
	array('label'=>'Delete Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrabajador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<h1>View Trabajador #<?php echo $model->idTrabajador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrabajador',
		'Persona_idPersona',
        'personaIdPersona.Cedula',
        'personaIdPersona.Nombre',
        'personaIdPersona.Apellido',
		array(
		'label'=>'Nacionalidad',
		'value'=>$model->getNacionalidad()
		),
		array(
		'label'=>'Sexo',
		'value'=>$model->getSexo()
		),
		array(
		'label'=>'Mano dominante',
		'value'=>$model->getMano()
		),
		//'Edo_Civil_idEdo_Civil',
        'edoCivilIdEdoCivil.Nombre',
		'Hijos',
		'nivelEducativoIdNivelEducativo.Nivel_Educativo',   
		'Grado_Educacion',     
		'Email',
		'CodigoPostal',
		'IngresoUNET',
		'IngresoIVSS',
		//'Ubicacion_idUbicacion',
        'ubicacionIdUbicacion.ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre',
		
		'ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre',
		
		'ubicacionIdUbicacion.Nombre',		
		//'Cargo_idCargo',
        'cargoIdCargo.Nombre',
		//'Dependencia_idDependencia',
        'dependenciaIdDependencia.Nombre',
		'Sueldo',
		
	),
)); ?>
