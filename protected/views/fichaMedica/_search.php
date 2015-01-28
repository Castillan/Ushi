<?php
/* @var $this FichaMedicaController */
/* @var $model FichaMedica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFicha_Medica'); ?>
		<?php echo $form->textField($model,'idFicha_Medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GrupoSanguineo'); ?>
		<?php echo $form->textField($model,'GrupoSanguineo',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RH'); ?>
		<?php echo $form->textField($model,'RH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EstadoSalud'); ?>
		<?php echo $form->textField($model,'EstadoSalud',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaAntitetanica'); ?>
		<?php echo $form->textField($model,'FechaAntitetanica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPariente'); ?>
		<?php echo $form->textField($model,'idPariente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Parentesco'); ?>
		<?php echo $form->textField($model,'Parentesco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->