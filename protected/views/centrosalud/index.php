<?php
/* @var $this CentrosaludController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centrosaluds',
);

$this->menu=array(
	array('label'=>'Crear Centrosalud', 'url'=>array('create')),
	array('label'=>'Administrar Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Centros de salud</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
