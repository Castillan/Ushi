<?php
/* @var $this FichaMedicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ficha Medicas',
);

$this->menu=array(
	array('label'=>'Crear FichaMedica', 'url'=>array('create')),
	array('label'=>'Administrar FichaMedica', 'url'=>array('admin')),
);
?>

<h1>Ficha Medicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
