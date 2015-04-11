<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Ingrese la Condicion que presenta</h1>

<?php $this->renderPartial('_crearforma', array('model'=>$model)); ?>
</div>
</div>