<?php
/* @var $this VacunaController */
/* @var $data Vacuna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVacuna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVacuna), array('view', 'id'=>$data->idVacuna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />


</div>