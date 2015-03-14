<?php
/* @var $this FichaVacunaController */
/* @var $data FichaVacuna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFicha_Vacuna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFicha_Vacuna), array('view', 'id'=>$data->idFicha_Vacuna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ficha_Medica_idFicha_Medica')); ?>:</b>
	<?php echo CHtml::encode($data->Ficha_Medica_idFicha_Medica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vacuna_idVacuna')); ?>:</b>
	<?php echo CHtml::encode($data->Vacuna_idVacuna); ?>
	<br />


</div>