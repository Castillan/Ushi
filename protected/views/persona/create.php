<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Ingrese la Informacion Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
</div>