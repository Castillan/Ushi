<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	$model->idTipoCondicion=>array('view','id'=>$model->idTipoCondicion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipocondicion', 'url'=>array('index')),
	array('label'=>'Crear Tipocondicion', 'url'=>array('create')),
	array('label'=>'Ver Tipocondicion', 'url'=>array('view', 'id'=>$model->idTipoCondicion)),
	array('label'=>'Administrar Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de condicion <?php echo $model->idTipoCondicion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>