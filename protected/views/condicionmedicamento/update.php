<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	$model->idCondicionMedicamento=>array('view','id'=>$model->idCondicionMedicamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Create Condicionmedicamento', 'url'=>array('create')),
	array('label'=>'View Condicionmedicamento', 'url'=>array('view', 'id'=>$model->idCondicionMedicamento)),
	array('label'=>'Manage Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Update Condicionmedicamento <?php echo $model->idCondicionMedicamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>