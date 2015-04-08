<?php
/* @var $this TipocentroController */
/* @var $model Tipocentro */

$this->breadcrumbs=array(
	'Tipocentros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Tipocentro', 'url'=>array('index')),
	array('label'=>'Crear Tipocentro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipocentro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipocentros</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipocentro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTipoCentro',
		'Nombre',
		'Descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
