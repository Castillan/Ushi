<?php
/* @var $this CondicionController */
/* @var $data Condicion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCondicion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCondicion), array('view', 'id'=>$data->idCondicion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ficha_Medica_idFicha_Medica')); ?>:</b>
	<?php echo CHtml::encode($data->Ficha_Medica_idFicha_Medica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Detalle')); ?>:</b>
	<?php echo CHtml::encode($data->Detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoCondicion_idTipoCondicion')); ?>:</b>
	<?php echo CHtml::encode($data->TipoCondicion_idTipoCondicion); ?>
	<br />


</div>