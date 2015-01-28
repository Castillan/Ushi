<?php
/* @var $this TiporutaController */
/* @var $data Tiporuta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoRuta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoRuta), array('view', 'id'=>$data->idTipoRuta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>