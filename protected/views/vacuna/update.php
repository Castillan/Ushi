<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idVacuna=>array('view','id'=>$model->idVacuna),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vacuna', 'url'=>array('index')),
	array('label'=>'Crear Vacuna', 'url'=>array('create')),
	array('label'=>'Ver Vacuna', 'url'=>array('view', 'id'=>$model->idVacuna)),
	array('label'=>'Administrar Vacuna', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vacuna <?php echo $model->idVacuna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>