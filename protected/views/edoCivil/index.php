<?php
/* @var $this EdoCivilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edo Civils',
);

$this->menu=array(
	array('label'=>'Create EdoCivil', 'url'=>array('create')),
	array('label'=>'Manage EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Edo Civils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
