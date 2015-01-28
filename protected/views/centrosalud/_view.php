<?php
/* @var $this CentrosaludController */
/* @var $data Centrosalud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCentroSalud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCentroSalud), array('view', 'id'=>$data->idCentroSalud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoCentro_idTipoCentro')); ?>:</b>
	<?php echo CHtml::encode($data->TipoCentro_idTipoCentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoAtencion_idTipoAtencion')); ?>:</b>
	<?php echo CHtml::encode($data->TipoAtencion_idTipoAtencion); ?>
	<br />


</div>