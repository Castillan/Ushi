<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipocondicion', 'url'=>array('index')),
	array('label'=>'Administrar Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de condicion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>