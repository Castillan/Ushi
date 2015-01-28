<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */

$this->breadcrumbs=array(
	'Ficha Medicas'=>array('index'),
	'Create',
);


?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Nueva Ficha Medica</h1>

<?php $this->renderPartial('_form', array('model1'=>$model1, 'model2'=>$model2)); ?>

	</div>
</div>
