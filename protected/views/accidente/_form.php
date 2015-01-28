<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accidente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DiaSemana_idDiaSemana'); ?>
		<?php echo $form->textField($model,'DiaSemana_idDiaSemana'); ?>
		<?php echo $form->error($model,'DiaSemana_idDiaSemana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora'); ?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dentro'); ?>
		<?php echo $form->textField($model,'Dentro'); ?>
		<?php echo $form->error($model,'Dentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->textField($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lugar'); ?>
		<?php echo $form->textField($model,'Lugar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->