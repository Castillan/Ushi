<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */

$this->breadcrumbs=array(
	'Trabajadoraccidentes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Trabajadoraccidente', 'url'=>array('index')),
	array('label'=>'Crear Trabajadoraccidente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trabajadoraccidente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Trabajadoraccidentes</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajadoraccidente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Accidente_idAccidente',
		'idTrabajadorAccidente',
		'Horas',
		'Minutos',
		'CentroSalud_idCentroSalud',
		'Trabajador_idTrabajador',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
