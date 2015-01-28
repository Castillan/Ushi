<?php
/* @var $this GradoController */
/* @var $data Grado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGrado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGrado), array('view', 'id'=>$data->idGrado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Grado')); ?>:</b>
	<?php echo CHtml::encode($data->Grado); ?>
	<br />


</div>