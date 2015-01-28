<?php
/* @var $this TrabajadorrutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadorrutas',
);

$this->menu=array(
	array('label'=>'Create Trabajadorruta', 'url'=>array('create')),
	array('label'=>'Manage Trabajadorruta', 'url'=>array('admin')),
);
?>

<h1>Trabajadorrutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
