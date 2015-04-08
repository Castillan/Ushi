<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar FichaMedica', 'url'=>array('index')),
	array('label'=>'Crear FichaMedica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ficha-medica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ficha Medicas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ficha-medica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idFicha_Medica',
		'GrupoSanguineo',
		'RH',
		'EstadoSalud',		
		'Persona_idPersona',
		/*
		'Fecha',
		'idPariente',
		'Parentesco',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
