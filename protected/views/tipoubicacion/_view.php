<?php
/* @var $this TipoubicacionController */
/* @var $data Tipoubicacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoUbicacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoUbicacion), array('view', 'id'=>$data->idTipoUbicacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>