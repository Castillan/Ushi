<?php
/* @var $this TrabajadoraccidenteController */
/* @var $data Trabajadoraccidente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTrabajadorAccidente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTrabajadorAccidente), array('view', 'id'=>$data->idTrabajadorAccidente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Accidente_idAccidente')); ?>:</b>
	<?php echo CHtml::encode($data->Accidente_idAccidente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Horas')); ?>:</b>
	<?php echo CHtml::encode($data->Horas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Minutos')); ?>:</b>
	<?php echo CHtml::encode($data->Minutos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CentroSalud_idCentroSalud')); ?>:</b>
	<?php echo CHtml::encode($data->CentroSalud_idCentroSalud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajador_idTrabajador')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajador_idTrabajador); ?>
	<br />


</div>