<?php
/* @var $this DiasemanaController */
/* @var $model Diasemana */

$this->breadcrumbs=array(
	'Diasemanas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Diasemana', 'url'=>array('index')),
	array('label'=>'Crear Diasemana', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#diasemana-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Dias de la semana</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'diasemana-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idDiaSemana',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
