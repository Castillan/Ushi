<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Niveleducativo', 'url'=>array('index')),
	array('label'=>'Administrar Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Crear Nivel educativo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>