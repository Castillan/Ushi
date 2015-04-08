<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar FichaVacuna', 'url'=>array('index')),
	array('label'=>'Administrar FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Crear FichaVacuna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>