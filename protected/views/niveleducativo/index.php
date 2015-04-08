<?php
/* @var $this NiveleducativoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveleducativos',
);

$this->menu=array(
	array('label'=>'Crear Niveleducativo', 'url'=>array('create')),
	array('label'=>'Administrar Niveleducativo', 'url'=>array('admin')),
);
?>

<h1>Nivel educativo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
