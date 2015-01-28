<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	$model->idDiaSemana=>array('view','id'=>$model->idDiaSemana),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diasemana', 'url'=>array('index')),
	array('label'=>'Create Diasemana', 'url'=>array('create')),
	array('label'=>'View Diasemana', 'url'=>array('view', 'id'=>$model->idDiaSemana)),
	array('label'=>'Manage Diasemana', 'url'=>array('admin')),
);
?>

<h1>Update Diasemana <?php echo $model->idDiaSemana; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>