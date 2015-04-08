<?php
/* @var $this TestigoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testigos',
);

$this->menu=array(
	array('label'=>'Crear Testigo', 'url'=>array('create')),
	array('label'=>'Administrar Testigo', 'url'=>array('admin')),
);
?>

<h1>Testigos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
