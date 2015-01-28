<?php
/* @var $this CentrosaludController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centrosaluds',
);

$this->menu=array(
	array('label'=>'Create Centrosalud', 'url'=>array('create')),
	array('label'=>'Manage Centrosalud', 'url'=>array('admin')),
);
?>

<h1>Centrosaluds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
