<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	$model->idFicha_Medica=>array('view','id'=>$model->idFicha_Medica),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar FichaMedica', 'url'=>array('index')),
	array('label'=>'Crear FichaMedica', 'url'=>array('create')),
	array('label'=>'Ver FichaMedica', 'url'=>array('view', 'id'=>$model->idFicha_Medica)),
	array('label'=>'Administrar FichaMedica', 'url'=>array('admin')),
);
?>

<h1>Actualizar FichaMedica <?php echo $model->idFicha_Medica; ?></h1>

<?php $this->renderPartial('_form', array('model1'=>$model1, 'model2'=>$model2)); ?>