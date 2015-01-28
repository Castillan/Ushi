<?php
/* @var $this NiveleducativoController */
/* @var $data Niveleducativo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNivelEducativo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNivelEducativo), array('view', 'id'=>$data->idNivelEducativo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Educacion_idEducacion')); ?>:</b>
	<?php echo CHtml::encode($data->Educacion_idEducacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Grado_idGrado')); ?>:</b>
	<?php echo CHtml::encode($data->Grado_idGrado); ?>
	<br />


</div>