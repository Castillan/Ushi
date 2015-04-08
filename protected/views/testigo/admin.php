<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Testigo', 'url'=>array('index')),
	array('label'=>'Crear Testigo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#testigo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Testigos</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testigo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Persona_idPersona',
		'Accidente_idAccidente',
		'idTestigo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
