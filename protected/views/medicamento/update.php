<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->idMedicamento=>array('view','id'=>$model->idMedicamento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Medicamento', 'url'=>array('index')),
	array('label'=>'Crear Medicamento', 'url'=>array('create')),
	array('label'=>'Ver Medicamento', 'url'=>array('view', 'id'=>$model->idMedicamento)),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Medicamento <?php echo $model->idMedicamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>