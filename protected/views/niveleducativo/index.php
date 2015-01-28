<?php
/* @var $this NiveleducativoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveleducativos',
);

$this->menu=array(
	array('label'=>'Create Niveleducativo', 'url'=>array('create')),
	array('label'=>'Manage Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Niveleducativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
