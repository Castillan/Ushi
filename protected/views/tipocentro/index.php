<?php
/* @var $this TipocentroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipocentros',
);

$this->menu=array(
	array('label'=>'Create Tipocentro', 'url'=>array('create')),
	array('label'=>'Manage Tipocentro', 'url'=>array('admin')),
);
?>

<h1>Tipocentros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
