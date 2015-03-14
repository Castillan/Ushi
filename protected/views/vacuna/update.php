<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idVacuna=>array('view','id'=>$model->idVacuna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'View Vacuna', 'url'=>array('view', 'id'=>$model->idVacuna)),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Update Vacuna <?php echo $model->idVacuna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>