<?php
/* @var $this AccidenteController */
/* @var $model Accidente */

$this->breadcrumbs=array(
	'Accidentes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Accidente', 'url'=>array('index')),
	array('label'=>'Crear Accidente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#accidente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Accidentes</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'accidente-grid',
	'dataProvider'=>$model->search(),
     'cssFile' => Yii::app()->baseUrl . '/css/gridview/styles.css',
     'summaryText' => 'Mostrando resultados {start} al {end} de {count} en total',
	'filter'=>$model,
	'columns'=>array(
		'idAccidente',
		'Fecha',
		'DiaSemana_idDiaSemana',
		'Hora',
		'Dentro',
		'Ubicacion_idUbicacion',
		/*
		'Lugar',
		'Descripcion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
