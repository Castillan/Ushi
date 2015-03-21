<?php
/* @var $this NiveleducativoController */
/* @var $data Niveleducativo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNivelEducativo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNivelEducativo), array('view', 'id'=>$data->idNivelEducativo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nivel_Educativo')); ?>:</b>
	<?php echo CHtml::encode($data->Nivel_Educativo); ?>
	<br />


</div>