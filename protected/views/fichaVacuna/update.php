<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	$model->idFicha_Vacuna=>array('view','id'=>$model->idFicha_Vacuna),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar FichaVacuna', 'url'=>array('index')),
	array('label'=>'Crear FichaVacuna', 'url'=>array('create')),
	array('label'=>'Ver FichaVacuna', 'url'=>array('view', 'id'=>$model->idFicha_Vacuna)),
	array('label'=>'Administrar FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ficha Vacuna <?php echo $model->idFicha_Vacuna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>