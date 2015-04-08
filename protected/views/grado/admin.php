<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Grado', 'url'=>array('index')),
	array('label'=>'Crear Grado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Grados</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idGrado',
		'Grado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
