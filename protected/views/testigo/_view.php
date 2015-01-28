<?php
/* @var $this TestigoController */
/* @var $data Testigo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTestigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTestigo), array('view', 'id'=>$data->idTestigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Accidente_idAccidente')); ?>:</b>
	<?php echo CHtml::encode($data->Accidente_idAccidente); ?>
	<br />


</div>