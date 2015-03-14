<?php
/* @var $this NotasController */
/* @var $model Notas */

$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->idNotas=>array('view','id'=>$model->idNotas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notas', 'url'=>array('index')),
	array('label'=>'Create Notas', 'url'=>array('create')),
	array('label'=>'View Notas', 'url'=>array('view', 'id'=>$model->idNotas)),
	array('label'=>'Manage Notas', 'url'=>array('admin')),
);
?>

<h1>Update Notas <?php echo $model->idNotas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>