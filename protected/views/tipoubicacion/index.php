<?php
/* @var $this TipoubicacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoubicacions',
);

$this->menu=array(
	array('label'=>'Crear Tipo ubicacion', 'url'=>array('create')),
	array('label'=>'Administrar Tipo ubicacion', 'url'=>array('admin')),
);
?>

<h1>Tipos de ubicacion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
