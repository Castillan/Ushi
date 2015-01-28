<?php
/* @var $this CondicionmedicamentoController */
/* @var $data Condicionmedicamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCondicionMedicamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCondicionMedicamento), array('view', 'id'=>$data->idCondicionMedicamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dosis')); ?>:</b>
	<?php echo CHtml::encode($data->Dosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EfectoSecundario')); ?>:</b>
	<?php echo CHtml::encode($data->EfectoSecundario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Medicamento_idMedicamento')); ?>:</b>
	<?php echo CHtml::encode($data->Medicamento_idMedicamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ficha_Medica_idFicha_Medica')); ?>:</b>
	<?php echo CHtml::encode($data->Ficha_Medica_idFicha_Medica); ?>
	<br />


</div>