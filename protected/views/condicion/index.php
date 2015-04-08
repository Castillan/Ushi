<?php
/* @var $this CondicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condicions',
);

$this->menu=array(
	array('label'=>'Crear Condicion', 'url'=>array('create')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>

<h1>Condiciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
