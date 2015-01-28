<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->idMedicamento,
);

$this->menu=array(
	array('label'=>'List Medicamento', 'url'=>array('index')),
	array('label'=>'Create Medicamento', 'url'=>array('create')),
	array('label'=>'Update Medicamento', 'url'=>array('update', 'id'=>$model->idMedicamento)),
	array('label'=>'Delete Medicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMedicamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medicamento', 'url'=>array('admin')),
);
?>

<h1>View Medicamento #<?php echo $model->idMedicamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMedicamento',
		'Nombre',
	),
)); ?>
