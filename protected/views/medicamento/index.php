<?php
/* @var $this MedicamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicamentos',
);

$this->menu=array(
	array('label'=>'Create Medicamento', 'url'=>array('create')),
	array('label'=>'Manage Medicamento', 'url'=>array('admin')),
);
?>

<h1>Medicamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
