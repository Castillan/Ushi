<?php
/* @var $this TestigoController */
/* @var $model Testigo */

$this->breadcrumbs=array(
	'Testigos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Testigo', 'url'=>array('index')),
	array('label'=>'Administrar Testigo', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Seleccione la Cedula del Testigo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div></div>