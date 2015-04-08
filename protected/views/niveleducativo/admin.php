<?php
/* @var $this NiveleducativoController */
/* @var $model Niveleducativo */

$this->breadcrumbs=array(
	'Niveleducativos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Niveleducativo', 'url'=>array('index')),
	array('label'=>'Crear Niveleducativo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#niveleducativo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Nivel educativo</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'niveleducativo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Nivel_Educativo',
		'idNivelEducativo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
