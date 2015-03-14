<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	$model->idFicha_Vacuna,
);

$this->menu=array(
	array('label'=>'List FichaVacuna', 'url'=>array('index')),
	array('label'=>'Create FichaVacuna', 'url'=>array('create')),
	array('label'=>'Update FichaVacuna', 'url'=>array('update', 'id'=>$model->idFicha_Vacuna)),
	array('label'=>'Delete FichaVacuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFicha_Vacuna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>View FichaVacuna #<?php echo $model->idFicha_Vacuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFicha_Vacuna',
		'Fecha',
		'Ficha_Medica_idFicha_Medica',
		'Vacuna_idVacuna',
	),
)); ?>
