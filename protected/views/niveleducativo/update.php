<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	$model->idNivelEducativo=>array('view','id'=>$model->idNivelEducativo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Niveleducativo', 'url'=>array('index')),
	array('label'=>'Create Niveleducativo', 'url'=>array('create')),
	array('label'=>'View Niveleducativo', 'url'=>array('view', 'id'=>$model->idNivelEducativo)),
	array('label'=>'Manage Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Update Niveleducativo <?php echo $model->idNivelEducativo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>