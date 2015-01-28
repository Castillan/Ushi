<?php
/* @var $this TipoubicacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoubicacions',
);

$this->menu=array(
	array('label'=>'Create Tipoubicacion', 'url'=>array('create')),
	array('label'=>'Manage Tipoubicacion', 'url'=>array('admin')),
);
?>

<h1>Tipoubicacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
