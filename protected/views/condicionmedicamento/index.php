<?php
/* @var $this CondicionmedicamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condicionmedicamentos',
);

$this->menu=array(
	array('label'=>'Crear Condicionmedicamento', 'url'=>array('create')),
	array('label'=>'Administrar Condicionmedicamento', 'url'=>array('admin')),
);
?>

<h1>Condicionmedicamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
