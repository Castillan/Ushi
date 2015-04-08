<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	$model->idCondicionMedicamento=>array('view','id'=>$model->idCondicionMedicamento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Crear Condicionmedicamento', 'url'=>array('create')),
	array('label'=>'Ver Condicionmedicamento', 'url'=>array('view', 'id'=>$model->idCondicionMedicamento)),
	array('label'=>'Administrar Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Condicionmedicamento <?php echo $model->idCondicionMedicamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>