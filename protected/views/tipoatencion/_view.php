<?php
/* @var $this TipoatencionController */
/* @var $data Tipoatencion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoAtencion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoAtencion), array('view', 'id'=>$data->idTipoAtencion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />


</div>