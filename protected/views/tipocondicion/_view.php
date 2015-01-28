<?php
/* @var $this TipocondicionController */
/* @var $data Tipocondicion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoCondicion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoCondicion), array('view', 'id'=>$data->idTipoCondicion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>