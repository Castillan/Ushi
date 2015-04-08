<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar EdoCivil', 'url'=>array('index')),
	array('label'=>'Administrar EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Crear Estado Civil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>