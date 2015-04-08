<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->idMedicamento,
);

$this->menu=array(
	array('label'=>'Listar Medicamento', 'url'=>array('index')),
	array('label'=>'Crear Medicamento', 'url'=>array('create')),
	array('label'=>'Actualizar Medicamento', 'url'=>array('update', 'id'=>$model->idMedicamento)),
	array('label'=>'Eliminar Medicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMedicamento),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Ver Medicamento #<?php echo $model->idMedicamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMedicamento',
		'Nombre',
	),
)); ?>
