<?php
/* @var $this TrabajadorrutaController */
/* @var $data Trabajadorruta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTrabajadorRuta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTrabajadorRuta), array('view', 'id'=>$data->idTrabajadorRuta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Detalle')); ?>:</b>
	<?php echo CHtml::encode($data->Detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoRuta_idTipoRuta')); ?>:</b>
	<?php echo CHtml::encode($data->TipoRuta_idTipoRuta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajador_idTrabajador')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajador_idTrabajador); ?>
	<br />


</div>