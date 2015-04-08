<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->idEducacion=>array('view','id'=>$model->idEducacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Educacion', 'url'=>array('index')),
	array('label'=>'Crear Educacion', 'url'=>array('create')),
	array('label'=>'Ver Educacion', 'url'=>array('view', 'id'=>$model->idEducacion)),
	array('label'=>'Administrar Educacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Educacion <?php echo $model->idEducacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>