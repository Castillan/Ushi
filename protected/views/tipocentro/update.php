<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	$model->idTipoCentro=>array('view','id'=>$model->idTipoCentro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipocentro', 'url'=>array('index')),
	array('label'=>'Create Tipocentro', 'url'=>array('create')),
	array('label'=>'View Tipocentro', 'url'=>array('view', 'id'=>$model->idTipoCentro)),
	array('label'=>'Manage Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Update Tipocentro <?php echo $model->idTipoCentro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>