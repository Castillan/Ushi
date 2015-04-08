<?php
/* @var $this TipoubicacionController */
/* @var $model Tipoubicacion */

$this->breadcrumbs=array(
	'Tipoubicacions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Tipoubicacion', 'url'=>array('index')),
	array('label'=>'Crear Tipo ubicacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipoubicacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipos de ubicacion</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipoubicacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTipoUbicacion',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
