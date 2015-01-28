<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipocondicion', 'url'=>array('index')),
	array('label'=>'Manage Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Create Tipocondicion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>