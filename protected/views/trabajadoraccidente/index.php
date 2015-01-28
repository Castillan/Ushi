<?php
/* @var $this TrabajadoraccidenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadoraccidentes',
);

$this->menu=array(
	array('label'=>'Create Trabajadoraccidente', 'url'=>array('create')),
	array('label'=>'Manage Trabajadoraccidente', 'url'=>array('admin')),
);
?>

<h1>Trabajadoraccidentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
