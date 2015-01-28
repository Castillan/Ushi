<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Usuario), array('view', 'id'=>$data->Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Roles_idRoles')); ?>:</b>
	<?php echo CHtml::encode($data->Roles_idRoles); ?>
	<br />


</div>