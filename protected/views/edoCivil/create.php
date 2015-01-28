<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EdoCivil', 'url'=>array('index')),
	array('label'=>'Manage EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Create EdoCivil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>