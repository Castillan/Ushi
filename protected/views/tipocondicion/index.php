<?php
/* @var $this TipocondicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipocondicions',
);

$this->menu=array(
	array('label'=>'Create Tipocondicion', 'url'=>array('create')),
	array('label'=>'Manage Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Tipocondicions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
