<?php
/* @var $this FichaVacunaController */
/* @var $model FichaVacuna */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ficha-vacuna-form',
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
		<?php echo $form->labelEx($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->textField($model,'Ficha_Medica_idFicha_Medica'); ?>
		<?php echo $form->error($model,'Ficha_Medica_idFicha_Medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vacuna_idVacuna'); ?>
		<?php echo $form->textField($model,'Vacuna_idVacuna'); ?>
		<?php echo $form->error($model,'Vacuna_idVacuna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->