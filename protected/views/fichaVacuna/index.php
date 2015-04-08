<?php
/* @var $this FichaVacunaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ficha Vacunas',
);

$this->menu=array(
	array('label'=>'Crear FichaVacuna', 'url'=>array('create')),
	array('label'=>'Administrar FichaVacuna', 'url'=>array('admin')),
);
?>

<h1>Ficha Vacunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
