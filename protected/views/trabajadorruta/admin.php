<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */

$this->breadcrumbs=array(
	'Trabajadorrutas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Trabajadorruta', 'url'=>array('index')),
	array('label'=>'Crear Trabajadorruta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trabajadorruta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Trabajador rutas</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajadorruta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTrabajadorRuta',
		'Detalle',
		'TipoRuta_idTipoRuta',
		'Trabajador_idTrabajador',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
