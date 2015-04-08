<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Vacuna', 'url'=>array('index')),
	array('label'=>'Crear Vacuna', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vacuna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Vacunas</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vacuna-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idVacuna',
		'Nombre',
		'Descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
