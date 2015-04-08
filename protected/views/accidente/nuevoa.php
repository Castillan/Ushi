<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	'Crear',
);


?>

<h1>Crear Accidente</h1>

<?php $this->renderPartial('_nuevo', array('model'=>$model)); ?>