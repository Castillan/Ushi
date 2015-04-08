<?php
/* @var $this EducacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Educaciones',
);

$this->menu=array(
	array('label'=>'Crear Educacion', 'url'=>array('create')),
	array('label'=>'Administrar Educacion', 'url'=>array('admin')),
);
?>

<h1>Educaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
