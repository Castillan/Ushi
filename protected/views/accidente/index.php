<?php
/* @var $this AccidenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accidentes',
);

$this->menu=array(
	array('label'=>'Crear Accidentes', 'url'=>array('create')),
	array('label'=>'Administrar Accidentes', 'url'=>array('admin')),
);
?>

<h1>Accidentes</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
