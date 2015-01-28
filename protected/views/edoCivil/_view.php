<?php
/* @var $this EdoCivilController */
/* @var $data EdoCivil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEdo_Civil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEdo_Civil), array('view', 'id'=>$data->idEdo_Civil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>