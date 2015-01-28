<?php
/* @var $this MedicamentoController */
/* @var $data Medicamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMedicamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMedicamento), array('view', 'id'=>$data->idMedicamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>