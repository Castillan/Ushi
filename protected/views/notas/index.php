<?php
/* @var $this NotasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notases',
);

$this->menu=array(
	array('label'=>'Crear Notas', 'url'=>array('create')),
	array('label'=>'Administrar Notas', 'url'=>array('admin')),
);
?>

<h1>Notas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
