<?php
/* @var $this NotasController */
/* @var $data Notas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNotas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNotas), array('view', 'id'=>$data->idNotas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nota1')); ?>:</b>
	<?php echo CHtml::encode($data->Nota1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nota2')); ?>:</b>
	<?php echo CHtml::encode($data->Nota2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nota3')); ?>:</b>
	<?php echo CHtml::encode($data->Nota3); ?>
	<br />


</div>