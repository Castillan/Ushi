<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->idMedicamento=>array('view','id'=>$model->idMedicamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medicamento', 'url'=>array('index')),
	array('label'=>'Create Medicamento', 'url'=>array('create')),
	array('label'=>'View Medicamento', 'url'=>array('view', 'id'=>$model->idMedicamento)),
	array('label'=>'Manage Medicamento', 'url'=>array('admin')),
);
?>

<h1>Update Medicamento <?php echo $model->idMedicamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>