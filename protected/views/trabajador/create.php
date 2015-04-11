<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	'Crear',
);


?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Ingrese Datos del Trabajador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>