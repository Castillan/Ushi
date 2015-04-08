<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educaciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Educacion', 'url'=>array('index')),
	array('label'=>'Crear Educacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#educacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Educacions</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'educacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idEducacion',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
