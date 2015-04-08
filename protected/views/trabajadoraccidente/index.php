<?php
/* @var $this TrabajadoraccidenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadoraccidentes',
);

$this->menu=array(
	array('label'=>'Crear Trabajador accidente', 'url'=>array('create')),
	array('label'=>'Administrar Trabajador accidente', 'url'=>array('admin')),
);
?>

<h1>Trabajador accidente</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
