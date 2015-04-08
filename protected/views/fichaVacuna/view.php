<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	$model->idFicha_Vacuna,
);

$this->menu=array(
	array('label'=>'Listar FichaVacuna', 'url'=>array('index')),
	array('label'=>'Crear FichaVacuna', 'url'=>array('create')),
	array('label'=>'Actualizar FichaVacuna', 'url'=>array('update', 'id'=>$model->idFicha_Vacuna)),
	array('label'=>'Eliminar FichaVacuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFicha_Vacuna),'confirm'=>'Seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Ver Ficha Vacuna #<?php echo $model->idFicha_Vacuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFicha_Vacuna',
		'Fecha',
		'Ficha_Medica_idFicha_Medica',
		'Vacuna_idVacuna',
	),
)); ?>
