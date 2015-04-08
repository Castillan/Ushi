<?php
/* @var $this UbicacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ubicacions',
);

$this->menu=array(
	array('label'=>'Crear Ubicacion', 'url'=>array('create')),
	array('label'=>'Administrar Ubicacion', 'url'=>array('admin')),
);
?>

<h1>Ubicaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
