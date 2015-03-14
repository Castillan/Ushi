<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	$model->idFicha_Vacuna=>array('view','id'=>$model->idFicha_Vacuna),
	'Update',
);

$this->menu=array(
	array('label'=>'List FichaVacuna', 'url'=>array('index')),
	array('label'=>'Create FichaVacuna', 'url'=>array('create')),
	array('label'=>'View FichaVacuna', 'url'=>array('view', 'id'=>$model->idFicha_Vacuna)),
	array('label'=>'Manage FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Update FichaVacuna <?php echo $model->idFicha_Vacuna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>