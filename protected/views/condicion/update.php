<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	$model->idCondicion=>array('view','id'=>$model->idCondicion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Crear Condicion', 'url'=>array('create')),
	array('label'=>'Ver Condicion', 'url'=>array('view', 'id'=>$model->idCondicion)),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>
<div class="contenido">
	
	<div class="mainbox">
<h1>Actualizar Condicion <?php echo $model->idCondicion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>