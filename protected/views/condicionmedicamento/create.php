<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Administrar Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Crear Condicionmedicamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>