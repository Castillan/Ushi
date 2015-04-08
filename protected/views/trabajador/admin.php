<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Trabajador', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trabajador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Trabajadors</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTrabajador',
		'Persona_idPersona',
		'Nacionalidad',
		'Sexo',
		'Mano',
		'Edo_Civil_idEdo_Civil',
		/*
		'Hijos',
		'NivelEducativo_idNivelEducativo',
		'Email',
		'CodigoPostal',
		'IngresoUNET',
		'IngresoIVSS',
		'Ubicacion_idUbicacion',
		'Cargo_idCargo',
		'Dependencia_idDependencia',
		'Sueldo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
