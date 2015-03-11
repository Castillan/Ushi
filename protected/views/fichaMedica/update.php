<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	$model->idFicha_Medica=>array('view','id'=>$model->idFicha_Medica),
	'Update',
);

$this->menu=array(
	array('label'=>'List FichaMedica', 'url'=>array('index')),
	array('label'=>'Create FichaMedica', 'url'=>array('create')),
	array('label'=>'View FichaMedica', 'url'=>array('view', 'id'=>$model->idFicha_Medica)),
	array('label'=>'Manage FichaMedica', 'url'=>array('admin')),
);
?>

<h1>Update FichaMedica <?php echo $model->idFicha_Medica; ?></h1>

<?php $this->renderPartial('_form', array('model1'=>$model1, 'model2'=>$model2)); ?>