<?php
/* @var $this EdoCivilController */
/* @var $model EdoCivil */

$this->breadcrumbs=array(
	'Edo Civils'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar EdoCivil', 'url'=>array('index')),
	array('label'=>'Crear EdoCivil', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#edo-civil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estado Civil</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edo-civil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idEdo_Civil',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
