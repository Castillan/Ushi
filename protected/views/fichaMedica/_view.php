<?php
/* @var $this FichaMedicaController */
/* @var $data FichaMedica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFicha_Medica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFicha_Medica), array('view', 'id'=>$data->idFicha_Medica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GrupoSanguineo')); ?>:</b>
	<?php echo CHtml::encode($data->GrupoSanguineo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RH')); ?>:</b>
	<?php echo CHtml::encode($data->RH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EstadoSalud')); ?>:</b>
	<?php echo CHtml::encode($data->EstadoSalud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaAntitetanica')); ?>:</b>
	<?php echo CHtml::encode($data->FechaAntitetanica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idPariente')); ?>:</b>
	<?php echo CHtml::encode($data->idPariente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->Parentesco); ?>
	<br />

	*/ ?>

</div>