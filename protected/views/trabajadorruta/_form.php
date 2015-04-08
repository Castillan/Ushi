<?php
/* @var $this TrabajadorrutaController */
/* @var $model Trabajadorruta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajadorruta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Detalle'); ?>
		<?php echo $form->textArea($model,'Detalle',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoRuta_idTipoRuta'); ?>
		<?php echo $form->textField($model,'TipoRuta_idTipoRuta'); ?>
		<?php echo $form->error($model,'TipoRuta_idTipoRuta'); ?>
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