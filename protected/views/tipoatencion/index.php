<?php
/* @var $this TipoatencionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoatencions',
);

$this->menu=array(
	array('label'=>'Crear Tipoatencion', 'url'=>array('create')),
	array('label'=>'Administrar Tipoatencion', 'url'=>array('admin')),
);
?>

<h1>Tipo atencion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
