<?php
/* @var $this TipocentroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipocentros',
);

$this->menu=array(
	array('label'=>'Crear Tipocentro', 'url'=>array('create')),
	array('label'=>'Administrar Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Tipo centro</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
