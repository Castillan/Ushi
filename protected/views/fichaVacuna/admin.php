<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */

$this->breadcrumbs=array(
	'Ficha Vacunas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar FichaVacuna', 'url'=>array('index')),
	array('label'=>'Crear FichaVacuna', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ficha-vacuna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ficha Vacunas</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ficha-vacuna-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idFicha_Vacuna',
		'Fecha',
		'Ficha_Medica_idFicha_Medica',
		'Vacuna_idVacuna',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
