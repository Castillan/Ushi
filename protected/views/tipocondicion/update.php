<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	$model->idTipoCondicion=>array('view','id'=>$model->idTipoCondicion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipocondicion', 'url'=>array('index')),
	array('label'=>'Create Tipocondicion', 'url'=>array('create')),
	array('label'=>'View Tipocondicion', 'url'=>array('view', 'id'=>$model->idTipoCondicion)),
	array('label'=>'Manage Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Update Tipocondicion <?php echo $model->idTipoCondicion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>