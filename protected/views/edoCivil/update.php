<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	$model->idEdo_Civil=>array('view','id'=>$model->idEdo_Civil),
	'Update',
);

$this->menu=array(
	array('label'=>'List EdoCivil', 'url'=>array('index')),
	array('label'=>'Create EdoCivil', 'url'=>array('create')),
	array('label'=>'View EdoCivil', 'url'=>array('view', 'id'=>$model->idEdo_Civil)),
	array('label'=>'Manage EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Update EdoCivil <?php echo $model->idEdo_Civil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>