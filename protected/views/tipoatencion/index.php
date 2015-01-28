<?php
/* @var $this TipoatencionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoatencions',
);

$this->menu=array(
	array('label'=>'Create Tipoatencion', 'url'=>array('create')),
	array('label'=>'Manage Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Tipoatencions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
