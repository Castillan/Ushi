<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->idPersona=>array('view','id'=>$model->idPersona),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Crear Persona', 'url'=>array('create')),
	array('label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->idPersona)),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Actualizar Persona <?php echo $model->idPersona; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>