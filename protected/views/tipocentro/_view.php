<?php
/* @var $this TipocentroController */
/* @var $data Tipocentro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoCentro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoCentro), array('view', 'id'=>$data->idTipoCentro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />


</div>