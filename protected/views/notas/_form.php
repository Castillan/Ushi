<?php
/* @var $this NotasController */
/* @var $model Notas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nota1'); ?>
		<?php echo $form->textField($model,'Nota1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Nota1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nota2'); ?>
		<?php echo $form->textField($model,'Nota2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Nota2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nota3'); ?>
		<?php echo $form->textField($model,'Nota3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Nota3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Burbuja'); ?>
		<?php echo $form->textField($model,'Burbuja',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Burbuja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->