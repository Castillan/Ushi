<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	'Create',
);


?>

<h1>Ingresa la informacion de la Vacuna</h1>

<?php $this->renderPartial('_nuevo', array('model'=>$model)); ?>