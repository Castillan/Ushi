<?php
/* @var $this EducacionController */
/* @var $data Educacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEducacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEducacion), array('view', 'id'=>$data->idEducacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>