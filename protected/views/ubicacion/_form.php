<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubicacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->textField($model,'Ubicacion_idUbicacion'); ?>
		<?php echo $form->error($model,'Ubicacion_idUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoUbicacion_idTipoUbicacion'); ?>
		<?php echo $form->textField($model,'TipoUbicacion_idTipoUbicacion'); ?>
		<?php echo $form->error($model,'TipoUbicacion_idTipoUbicacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->