<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	$model->idEdo_Civil=>array('view','id'=>$model->idEdo_Civil),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar EdoCivil', 'url'=>array('index')),
	array('label'=>'Crear EdoCivil', 'url'=>array('create')),
	array('label'=>'Ver EdoCivil', 'url'=>array('view', 'id'=>$model->idEdo_Civil)),
	array('label'=>'Administrar EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Actualizar Estado Civil <?php echo $model->idEdo_Civil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>