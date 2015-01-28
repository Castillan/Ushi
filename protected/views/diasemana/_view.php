<?php
/* @var $this DiasemanaController */
/* @var $data Diasemana */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDiaSemana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDiaSemana), array('view', 'id'=>$data->idDiaSemana)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>