<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Ubicacion', 'url'=>array('index')),
	array('label'=>'Crear Ubicacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ubicacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ubicaciones</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ubicacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idUbicacion',
		'Nombre',
		'Ubicacion_idUbicacion',
		'TipoUbicacion_idTipoUbicacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
