<?php
/* @var $this CentrosaludController */
/* @var $model Centrosalud */

$this->breadcrumbs=array(
	'Centrosaluds'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Centrosalud', 'url'=>array('index')),
	array('label'=>'Crear Centrosalud', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#centrosalud-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Centro de salud</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centrosalud-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCentroSalud',
		'Nombre',
		'Direccion',
		'TipoCentro_idTipoCentro',
		'TipoAtencion_idTipoAtencion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
