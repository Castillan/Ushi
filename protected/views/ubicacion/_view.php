<?php
/* @var $this UbicacionController */
/* @var $data Ubicacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUbicacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUbicacion), array('view', 'id'=>$data->idUbicacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ubicacion_idUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->Ubicacion_idUbicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoUbicacion_idTipoUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->TipoUbicacion_idTipoUbicacion); ?>
	<br />


</div>