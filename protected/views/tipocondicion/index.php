<?php
/* @var $this TipocondicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipocondicions',
);

$this->menu=array(
	array('label'=>'Crear Tipocondicion', 'url'=>array('create')),
	array('label'=>'Administrar Tipocondicion', 'url'=>array('admin')),
);
?>

<h1>Tipos de condicion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
