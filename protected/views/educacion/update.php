<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->idEducacion=>array('view','id'=>$model->idEducacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'View Educacion', 'url'=>array('view', 'id'=>$model->idEducacion)),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>Update Educacion <?php echo $model->idEducacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>