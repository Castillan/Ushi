<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FichaVacuna', 'url'=>array('index')),
	array('label'=>'Manage FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Create FichaVacuna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>