<?php
/* @var $this TiporutaController */
/* @var $model Tiporuta */

$this->breadcrumbs=array(
	'Tiporutas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Tiporuta', 'url'=>array('index')),
	array('label'=>'Crear Tiporuta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tiporuta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tiporutas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tiporuta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTipoRuta',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
