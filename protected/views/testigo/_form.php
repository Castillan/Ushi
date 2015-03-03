<?php
/* @var $this TestigoController */
/* @var $model Testigo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testigo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Persona_idPersona'); ?>
		<?php echo $form->dropDownList($model,'Persona_idPersona',CHtml::listData(Persona::model()->findAll(),'idPersona','Cedula'),array('empty'=>'Cedula de persona involucadra')); ?>
		<?php echo $form->error($model,'Persona_idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->