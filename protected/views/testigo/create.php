<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Testigo', 'url'=>array('index')),
	array('label'=>'Administrar Testigo', 'url'=>array('admin')),
);
?>

<h1>Crear Testigo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>