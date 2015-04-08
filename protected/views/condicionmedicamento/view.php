<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	$model->idCondicionMedicamento,
);

$this->menu=array(
	array('label'=>'Listar Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Crear Condicionmedicamento', 'url'=>array('create')),
	array('label'=>'Actualizar Condicionmedicamento', 'url'=>array('update', 'id'=>$model->idCondicionMedicamento)),
	array('label'=>'Eliminar Condicionmedicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCondicionMedicamento),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Ver Condicionmedicamento #<?php echo $model->idCondicionMedicamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'medicamentoIdMedicamento.Nombre',
		'Dosis',
		'EfectoSecundario',

	),
)); ?>
