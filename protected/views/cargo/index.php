<?php
/* @var $this CargoController */
/* @var $dataProvider CActiveDataProvider */
/*echo "<div class='main'><div class='contenido'>";*/
/*echo '<div class="flexible">';*/
$this->breadcrumbs=array(
	'Cargos',
);
/*echo '<div class="flexible">
    <div class="caja18">';*/
$this->menu=array(
	array('label'=>'Create Cargo', 'url'=>array('create')),
	array('label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<!--
<div class="caja77">-->
<h1>Cargos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<!--</div></div>-->