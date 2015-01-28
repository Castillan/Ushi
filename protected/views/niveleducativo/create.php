<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Niveleducativo', 'url'=>array('index')),
	array('label'=>'Manage Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Create Niveleducativo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>