<?php
/* @var $this DiasemanaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diasemanas',
);

$this->menu=array(
	array('label'=>'Crear Diasemana', 'url'=>array('create')),
	array('label'=>'Administrar Diasemana', 'url'=>array('admin')),
);
?>

<h1>Dias de la semana</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
