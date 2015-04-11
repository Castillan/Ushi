<?php
/* @var $this CondicionmedicamentoController */
/* @var $model Condicionmedicamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicionmedicamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son Obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Medicamento_idMedicamento'); ?>
		<?php echo $form->dropDownList($model,'Medicamento_idMedicamento',CHtml::listData(Medicamento::model()->findAll(),'idMedicamento','Nombre')); ?>
		<?php echo $form->error($model,'Medicamento_idMedicamento'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Dosis'); ?>
		<?php echo $form->textField($model,'Dosis',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Dosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EfectoSecundario'); ?>
		<?php echo $form->textField($model,'EfectoSecundario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EfectoSecundario'); ?>
	</div>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->