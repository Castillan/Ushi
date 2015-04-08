<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	$model->idNivelEducativo=>array('view','id'=>$model->idNivelEducativo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Niveleducativo', 'url'=>array('index')),
	array('label'=>'Crear Niveleducativo', 'url'=>array('create')),
	array('label'=>'Ver Niveleducativo', 'url'=>array('view', 'id'=>$model->idNivelEducativo)),
	array('label'=>'Administrar Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Nivel educativo <?php echo $model->idNivelEducativo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>