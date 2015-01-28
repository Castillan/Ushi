<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	$model->idTestigo=>array('view','id'=>$model->idTestigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testigo', 'url'=>array('index')),
	array('label'=>'Create Testigo', 'url'=>array('create')),
	array('label'=>'View Testigo', 'url'=>array('view', 'id'=>$model->idTestigo)),
	array('label'=>'Manage Testigo', 'url'=>array('admin')),
);
?>

<h1>Update Testigo <?php echo $model->idTestigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>