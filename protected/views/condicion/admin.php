<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Crear Condicion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#condicion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Condiciones</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCondicion',
		'Ficha_Medica_idFicha_Medica',
		'Detalle',
		'TipoCondicion_idTipoCondicion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
