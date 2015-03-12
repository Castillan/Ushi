<?php
/* @var $this AccidenteController */
/* @var $data Accidente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAccidente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAccidente), array('view', 'id'=>$data->idAccidente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DiaSemana_idDiaSemana')); ?>:</b>
	<?php echo CHtml::encode($data->DiaSemana_idDiaSemana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora')); ?>:</b>
	<?php echo CHtml::encode($data->Hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dentro')); ?>:</b>
	<?php echo CHtml::encode($data->getDentro()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ubicacion_idUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->Ubicacion_idUbicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar')); ?>:</b>
	<?php echo CHtml::encode($data->Lugar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	*/ ?>

</div>