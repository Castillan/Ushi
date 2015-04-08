<?php
/* @var $this TipocondicionController */
/* @var $model Tipocondicion */

$this->breadcrumbs=array(
	'Tipocondicions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Tipocondicion', 'url'=>array('index')),
	array('label'=>'Crear Tipocondicion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipocondicion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipo condicion</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipocondicion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTipoCondicion',
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
