<?php
/* @var $this DiasemanaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diasemanas',
);

$this->menu=array(
	array('label'=>'Create Diasemana', 'url'=>array('create')),
	array('label'=>'Manage Diasemana', 'url'=>array('admin')),
);
?>

<h1>Diasemanas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
