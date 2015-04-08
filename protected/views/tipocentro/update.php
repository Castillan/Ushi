<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	$model->idTipoCentro=>array('view','id'=>$model->idTipoCentro),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipocentro', 'url'=>array('index')),
	array('label'=>'Crear Tipocentro', 'url'=>array('create')),
	array('label'=>'Ver Tipocentro', 'url'=>array('view', 'id'=>$model->idTipoCentro)),
	array('label'=>'Administrar Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo centro <?php echo $model->idTipoCentro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>