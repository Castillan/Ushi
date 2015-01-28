<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	$model->idCondicionMedicamento,
);

$this->menu=array(
	array('label'=>'List Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Create Condicionmedicamento', 'url'=>array('create')),
	array('label'=>'Update Condicionmedicamento', 'url'=>array('update', 'id'=>$model->idCondicionMedicamento)),
	array('label'=>'Delete Condicionmedicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCondicionMedicamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>View Condicionmedicamento #<?php echo $model->idCondicionMedicamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCondicionMedicamento',
		'Dosis',
		'EfectoSecundario',
		'Medicamento_idMedicamento',
		'Ficha_Medica_idFicha_Medica',
	),
)); ?>
