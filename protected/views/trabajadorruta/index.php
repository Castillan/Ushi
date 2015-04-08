<?php
/* @var $this TrabajadorrutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadorrutas',
);

$this->menu=array(
	array('label'=>'Crear Trabajador ruta', 'url'=>array('create')),
	array('label'=>'Administrar Trabajador ruta', 'url'=>array('admin')),
);
?>

<h1>Trabajador rutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
