<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Testigo', 'url'=>array('index')),
	array('label'=>'Manage Testigo', 'url'=>array('admin')),
);
?>

<h1>Create Testigo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>