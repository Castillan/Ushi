<?php
/* @var $this EdoCivilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edo Civils',
);

$this->menu=array(
	array('label'=>'Crear EdoCivil', 'url'=>array('create')),
	array('label'=>'Administrar EdoCivil', 'url'=>array('admin')),
);
?>

<h1>Estado Civil</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
