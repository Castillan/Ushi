<?php
/* @var $this TrabajadoraccidenteController */
/* @var $model Trabajadoraccidente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajadoraccidente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Accidente_idAccidente'); ?>
		<?php echo $form->textField($model,'Accidente_idAccidente'); ?>
		<?php echo $form->error($model,'Accidente_idAccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Horas'); ?>
		<?php echo $form->textField($model,'Horas'); ?>
		<?php echo $form->error($model,'Horas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Minutos'); ?>
		<?php echo $form->textField($model,'Minutos'); ?>
		<?php echo $form->error($model,'Minutos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CentroSalud_idCentroSalud'); ?>
		<?php echo $form->textField($model,'CentroSalud_idCentroSalud'); ?>
		<?php echo $form->error($model,'CentroSalud_idCentroSalud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajador_idTrabajador'); ?>
		<?php echo $form->textField($model,'Trabajador_idTrabajador'); ?>
		<?php echo $form->error($model,'Trabajador_idTrabajador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->