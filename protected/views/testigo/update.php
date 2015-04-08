<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	$model->idTestigo=>array('view','id'=>$model->idTestigo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Testigo', 'url'=>array('index')),
	array('label'=>'Crear Testigo', 'url'=>array('create')),
	array('label'=>'Ver Testigo', 'url'=>array('view', 'id'=>$model->idTestigo)),
	array('label'=>'Administrar Testigo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Testigo <?php echo $model->idTestigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>