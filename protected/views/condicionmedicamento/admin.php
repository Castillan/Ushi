<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */

$this->breadcrumbs=array(
	'Condicionmedicamentos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Condicionmedicamento', 'url'=>array('index')),
	array('label'=>'Crear Condicionmedicamento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#condicionmedicamento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Condicionmedicamentos</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'condicionmedicamento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCondicionMedicamento',
		'Dosis',
		'EfectoSecundario',
		'Medicamento_idMedicamento',
		'Ficha_Medica_idFicha_Medica',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
